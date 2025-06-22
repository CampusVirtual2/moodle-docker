#Configuração container para moodle com php 8.3 e todos módulos e extensões necessárias
LINHA=$(sed -n '/^DOMAIN/p' .env)
if [ ! -z "$LINHA" ]; then
        DOMAIN=$( echo $LINHA | cut -d "=" -f 2)
else
        DOMAIN="localhost"
fi

USUARIO=$(id -u)
GRUPO=$(id -g)

if grep -q '^USER' .env
then
    echo "";
    #echo "Já existe a variável USER definida em .env";
else
    #echo "Linha que define ID de usuário (USER) não está presente, será adicionada";
    echo 'USER='$USUARIO >> .env
fi

if grep -q '^GROUP' .env
then
    echo "";
    #echo "Já existe a variável GROUP definida em .env";
else
    #echo "linha que define ID de grupo (GROUP) não está presente, será adicionada";
    echo 'GROUP='$GRUPO >> .env
fi

cat <<EOF >Dockerfile
FROM php:8.3-apache
ARG APCU_VERSION=5.1.24
RUN apt-get update \\
&& apt upgrade -y \\
&& apt-get install -y wget unzip cron vim nano
RUN docker-php-ext-install -j\$(nproc) mysqli
RUN set -eux;
#Download e instalação das bibliotecas do SO
RUN apt-get update \\
  && apt-get install -f -y --no-install-recommends \\
  rsync \\
  libz-dev \\
  libpq-dev \\
  libjpeg-dev \\
  libfreetype6-dev \\
  libmcrypt-dev \\
  libbz2-dev \\
  libjpeg62-turbo-dev \\
  gnupg \\
  libldap2-dev \\
  libpng-dev \\
  libxslt-dev \\
  gettext \\
  unixodbc-dev \\
  uuid-dev \\
  ghostscript \\
  libaio1 \\
  libgss3 \\
  locales \\
  sassc \\
  libmagickwand-dev \\
  libldap2-dev
#Instala suporte php para compressão e decompressão zip
RUN apt-get install -y libzip-dev zip \\
&& docker-php-ext-configure zip \\
&& docker-php-ext-install zip
#Instala suporte php para intl
RUN apt-get install -y libicu-dev \\
&& docker-php-ext-configure intl \\
&& docker-php-ext-install intl
#Instala suporte php para soap
RUN apt-get install -y libxml2-dev \\
&& docker-php-ext-configure soap \\
&& docker-php-ext-install soap
#Instala suporte php para exif
RUN docker-php-ext-install exif
#Instala suporte php para opcache
RUN docker-php-ext-install opcache
RUN pecl install redis \
&& docker-php-ext-enable redis
#INSTALL APCU
RUN pecl install apcu-\${APCU_VERSION} && docker-php-ext-enable apcu
#RUN echo "extension=apcu.so" > /usr/local/etc/php/php.ini
#RUN echo "apc.enable_cli=1" > /usr/local/etc/php/php.ini
#RUN echo "apc.enable=1" > /usr/local/etc/php/php.ini
RUN echo "extension=apcu.so" > /usr/local/etc/php/conf.d/php.ini
RUN echo "apc.enable_cli=1" > /usr/local/etc/php/conf.d/php.ini
RUN echo "apc.enable=1" > /usr/local/etc/php/conf.d/php.ini
#APCU
RUN pecl install memcache \
&& docker-php-ext-enable memcache
#Instala suporte php para gd
RUN docker-php-ext-configure gd \\
    --with-freetype=/usr/include/ \\
    --with-jpeg=/usr/include/ \\
    --enable-gd
RUN docker-php-ext-install -j\$(nproc) gd
#Instala suporte php para igbinary, uuid e xmlrpc
RUN pecl install igbinary uuid xmlrpc-beta \\
&& docker-php-ext-enable igbinary uuid xmlrpc
#Limpa todo cache do apt de softwares instalados e pacote não utilizados
RUN apt-get autopurge -y \\
    && apt-get autoremove -y \\
    && apt-get autoclean \\
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \\
    && docker-php-source delete
#Edita o arquivo php.ini inserindo as configurações recomendadas para utilização com o Moodle
RUN set -ex \\
    && { \\
        echo 'log_errors = on'; \\
        echo 'display_errors = off'; \\
        echo 'always_populate_raw_post_data = -1'; \\
        echo 'cgi.fix_pathinfo = 1'; \\
        echo 'session.auto_start = 0'; \\
        echo 'upload_max_filesize = 100M'; \\
        echo 'post_max_size = 150M'; \\
        echo 'max_execution_time = 1800'; \\
        echo 'max_input_vars = 5000'; \\
        echo '[opcache]'; \\
        echo 'opcache.enable = 1'; \\
        echo 'opcache.memory_consumption = 128'; \\
        echo 'opcache.max_accelerated_files = 8000'; \\
        echo 'opcache.revalidate_freq = 60'; \\
        echo 'opcache.use_cwd = 1'; \\
        echo 'opcache.validate_timestamps = 1'; \\
        echo 'opcache.save_comments = 1'; \\
        echo 'opcache.enable_file_override = 0'; \\
    } | tee /usr/local/etc/php/conf.d/php.ini
#Define o diretório para executar os comandos a seguir
WORKDIR /var/www/html
#Realiza o download do Moodle na versão 4.01, em seguida descomprime o arquivo dentro na raiz da pasta /var/www/html, altera permissões da pasta e subpastas para 755. 
RUN wget https://download.moodle.org/download.php/direct/stable401/moodle-latest-401.tgz \\
&& tar -zxvf moodle-latest-401.tgz --strip-components=1 \\
&& rm -R moodle-latest-401.tgz \\
&& chmod 0755 /var/www/html -R
#Define o usuário e grupo www-data como proprietário de todos os arquivos do moodle
RUN chown www-data:www-data /var/www/html -R
#Cria o diretório moodledata onde os arquivos dos cursos são armazenados e define a permissão para 770
RUN mkdir /var/www/moodledata && \\
chmod 0770 /var/www/moodledata -R
#define o usuário www-data como proprietário de todos os arquivos dentro da pasta moodledata
RUN chown www-data /var/www/moodledata -R
#Cria uma entrada de cronjob que permite o moodle realizar tarefas periódicas
#RUN echo "*/1 * * * * root php -q -f /var/www/html/moodle/admin/cli/cron.php > /var/log/moodle_cron.log" >> /etc/crontab
RUN (crontab -l ; echo "*/1 * * * * root php -q -f /var/www/html/moodle/admin/cli/cron.php > /var/log/apache2/moodle_cron.log" >> /var/log/apache2/cron.log) | crontab
#Define o UID e GID do usuário/grupo www-data para ser o mesmo do usuário e grupo do host
RUN usermod -u $USUARIO www-data && groupmod -g $GRUPO www-data
#Copia para dentro do container o arquivo de virtualhost da porta 80 e 443
ADD default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
ADD 000-default.conf /etc/apache2/sites-available/000-default.conf
#Habilita o virtualhost da porta 80 e 443
RUN a2ensite default-ssl.conf
RUN a2ensite 000-default.conf
#Habilita supote para módulos do php: rewrite, headers, expires e ssl
RUN a2enmod rewrite && a2enmod headers && a2enmod expires && a2enmod ssl
#Define o correto nome do servidor para remover warning do log do docker
RUN echo "ServerName $DOMAIN" >> /etc/apache2/apache2.conf
#Abre as portas 80 e 443
EXPOSE 80 443
EOF

cat <<EOF >000-default.conf
<VirtualHost *:80>
       ServerAdmin webmaster@$DOMAIN
       DocumentRoot /var/www/html
       ErrorLog \${APACHE_LOG_DIR}/error.log
       CustomLog \${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF

cat <<EOF >default-ssl.conf
<IfModule mod_ssl.c>
        <VirtualHost _default_:443>
                ServerAdmin webmaster@$DOMAIN
                DocumentRoot /var/www/html
                Header always set Strict-Transport-Security "max-age=63072000; includeSubdomains;"
                Header append X-FRAME-OPTIONS "SAMEORIGIN"
                Header set X-Content-Type-Options nosniff
                Header set X-XSS-Protection "1; mode=block"
                Header always set Referrer-Policy "no-referrer"
                ErrorLog \${APACHE_LOG_DIR}/error.log
                CustomLog \${APACHE_LOG_DIR}/access.log combined
                SSLEngine on
                #SSLCertificateFile     /etc/apache2/ssl-certs/cert-filename.cert
                #SSLCertificateKeyFile  /etc/apache2/ssl-certs/cert-filenamekey.key
                SSLCertificateFile     /etc/apache2/ssl-certs/server.crt
                SSLCertificateKeyFile  /etc/apache2/ssl-certs/server.key
                <FilesMatch "\.(cgi|shtml|phtml|php)\$">
                                SSLOptions +StdEnvVars
                </FilesMatch>
                <Directory /usr/lib/cgi-bin>
                                SSLOptions +StdEnvVars
                </Directory>
                BrowserMatch "MSIE [2-6]" \\
                     nokeepalive ssl-unclean-shutdown \\
                     downgrade-1.0 force-response-1.0
                BrowserMatch "MSIE [17-9]" ssl-unclean-shutdown
       </VirtualHost>
</IfModule>
EOF

cat <<EOF >docker-compose.yml
services:
  moodledb:
    image: mariadb:latest
    container_name: \${DOMAIN}_db
    command: '--default-authentication-plugin=mysql_native_password'
    volumes:
      - ./db_data:/var/lib/mysql
    restart: always
    env_file: .env
    environment:
      - MYSQL_USER=\${MYSQL_USER}
      - MYSQL_DATABASE=\${MYSQL_DB}
      - MYSQL_PASSWORD=\${MYSQL_PASSWORD}
      - MYSQL_ROOT_PASSWORD=\${MYSQL_PASSWORD}
      - MARIADB_CHARACTER_SET=utf8mb4
      - MARIADB_COLLATE=utf8mb4_unicode_ci
    networks:
      - default
  $DOMAIN:
    container_name: \${DOMAIN}_web
    env_file: .env
    build: .
    ports:
      - '8000:80'
      - '8443:443'
    environment:
      - MOODLE_DATABASE_HOST=moodledb
      - MOODLE_DATABASE_PORT_NUMBER=3306
      - MOODLE_DATABASE_USER=\${MYSQL_USER}
      - MOODLE_DATABASE_NAME=\${MYSQL_DB}
      - MOODLE_DATABASE_PASSWORD=\${MYSQL_PASSWORD}
      - ALLOW_EMPTY_PASSWORD=no
      - MOODLE_REVERSEPROXY=yes
    volumes:
      - ./moodle_data:/var/www/html
      - ./moodledata_data:/var/www/moodledata
      - ./logs:/var/log/apache2
      - ./000-default.conf:/etc/apache2/sites-available/000-default.conf
      - ./default-ssl.conf:/etc/apache2/sites-available/default-ssl.conf
      - /etc/localtime:/etc/localtime:ro
      - /etc/timezone:/etc/timezone:ro
      - /home/vinicius/docker/nginxproxymanager/letsencrypt/live/npm-XX/fullchain.pem:/etc/apache2/ssl-certs/server.crt
      - /home/vinicius/docker/nginxproxymanager/letsencrypt/live/npm-XX/privkey.pem:/etc/apache2/ssl-certs/server.key
#      - /etc/letsencrypt/live/${DOMAIN}/fullchain.pem:/etc/apache2/ssl-certs/server.crt
#      - /etc/letsencrypt/live/${DOMAIN}/privkey.pem:/etc/apache2/ssl-certs/server.key
    depends_on:
      - moodledb
    extra_hosts:
      - "\${DOMAIN}:127.0.1.1"
    networks:
      - rede_proxy_reverso
      - default
  phpmyadmin:
    container_name: \${DOMAIN}_phpmyadmin
    image: linuxserver/phpmyadmin
    env_file: .env
    environment:
      PMA_HOST: moodledb #nome do container que proverá recursos de banco de dados, neste caso o container chama db
      PMA_PORT: 3306
      MYSQL_ROOT_PASSWORD: \${MYSQL_PASSWORD}
      UPLOAD_LIMIT: 1024M
      MEMORY_LIMIT: 1024M
      MAX_EXECUTION_TIME: 300
    ports:
      - "8001:80"
    networks:
      - default
  redis:
    image: redis:7.4.1-alpine
    volumes:
      - ./redis:/data
    ports:
      - 6379:6379
    networks:
      - default
volumes:
  mariadb_data:
    driver: local
  moodle_data:
    driver: local
  moodledata_data:
    driver: local
networks:
  default:
    name: rede_\${DOMAIN}
  rede_proxy_reverso:
    external: true
EOF
