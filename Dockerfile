FROM php:8.1-apache
ARG APCU_VERSION=5.1.24
RUN apt-get update \
&& apt upgrade -y \
&& apt-get install -y wget unzip cron vim nano
RUN docker-php-ext-install -j$(nproc) mysqli
RUN set -eux;
#Download e instalação das bibliotecas do SO
RUN apt-get update \
  && apt-get install -f -y --no-install-recommends \
  rsync \
  libz-dev \
  libpq-dev \
  libjpeg-dev \
  libfreetype6-dev \
  libmcrypt-dev \
  libbz2-dev \
  libjpeg62-turbo-dev \
  gnupg \
  libldap2-dev \
  libpng-dev \
  libxslt-dev \
  gettext \
  unixodbc-dev \
  uuid-dev \
  ghostscript \
  libaio1 \
  libgss3 \
  locales \
  sassc \
  libmagickwand-dev \
  libldap2-dev
#Instala suporte php para compressão e decompressão zip
RUN apt-get install -y libzip-dev zip \
&& docker-php-ext-configure zip \
&& docker-php-ext-install zip
#Instala suporte php para intl
RUN apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl
#Instala suporte php para soap
RUN apt-get install -y libxml2-dev \
&& docker-php-ext-configure soap \
&& docker-php-ext-install soap
#Instala suporte php para exif
RUN docker-php-ext-install exif
#Instala suporte php para opcache
RUN docker-php-ext-install opcache
RUN pecl install redis && docker-php-ext-enable redis
#INSTALL APCU
RUN pecl install apcu-${APCU_VERSION} && docker-php-ext-enable apcu
#RUN echo "extension=apcu.so" > /usr/local/etc/php/php.ini
#RUN echo "apc.enable_cli=1" > /usr/local/etc/php/php.ini
#RUN echo "apc.enable=1" > /usr/local/etc/php/php.ini
RUN echo "extension=apcu.so" > /usr/local/etc/php/conf.d/php.ini
RUN echo "apc.enable_cli=1" > /usr/local/etc/php/conf.d/php.ini
RUN echo "apc.enable=1" > /usr/local/etc/php/conf.d/php.ini
#APCU
RUN pecl install memcache && docker-php-ext-enable memcache
#Instala suporte php para gd
RUN docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr/include/ \
    --enable-gd
RUN docker-php-ext-install -j$(nproc) gd
#Instala suporte php para igbinary, uuid e xmlrpc
RUN pecl install igbinary uuid xmlrpc-beta \
&& docker-php-ext-enable igbinary uuid xmlrpc
#Limpa todo cache do apt de softwares instalados e pacote não utilizados
RUN apt-get autopurge -y \
    && apt-get autoremove -y \
    && apt-get autoclean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \
    && docker-php-source delete
#Edita o arquivo php.ini inserindo as configurações recomendadas para utilização com o Moodle
RUN set -ex \
    && { \
        echo 'log_errors = on'; \
        echo 'display_errors = off'; \
        echo 'always_populate_raw_post_data = -1'; \
        echo 'cgi.fix_pathinfo = 1'; \
        echo 'session.auto_start = 0'; \
        echo 'upload_max_filesize = 100M'; \
        echo 'post_max_size = 150M'; \
        echo 'max_execution_time = 1800'; \
        echo 'max_input_vars = 5000'; \
        echo '[opcache]'; \
        echo 'opcache.enable = 1'; \
        echo 'opcache.memory_consumption = 128'; \
        echo 'opcache.max_accelerated_files = 8000'; \
        echo 'opcache.revalidate_freq = 60'; \
        echo 'opcache.use_cwd = 1'; \
        echo 'opcache.validate_timestamps = 1'; \
        echo 'opcache.save_comments = 1'; \
        echo 'opcache.enable_file_override = 0'; \
    } | tee /usr/local/etc/php/conf.d/php.ini
#Define o diretório para executar os comandos a seguir
WORKDIR /var/www/html
#Realiza o download do Moodle na versão 4.01, em seguida descomprime o arquivo dentro na raiz da pasta /var/www/html, altera permissões da pasta e subpastas para 755. 
RUN wget https://download.moodle.org/download.php/direct/stable401/moodle-latest-401.tgz \
&& tar -zxvf moodle-latest-401.tgz --strip-components=1 \
&& rm -R moodle-latest-401.tgz \
&& chmod 0755 /var/www/html -R
#Define o usuário e grupo www-data como proprietário de todos os arquivos do moodle
RUN chown www-data:www-data /var/www/html -R
#Cria o diretório moodledata onde os arquivos dos cursos são armazenados e define a permissão para 770
RUN mkdir /var/www/moodledata && \
chmod 0770 /var/www/moodledata -R
#define o usuário www-data como proprietário de todos os arquivos dentro da pasta moodledata
RUN chown www-data /var/www/moodledata -R
#Cria uma entrada de cronjob que permite o moodle realizar tarefas periódicas
#RUN echo "*/1 * * * * root php -q -f /var/www/html/moodle/admin/cli/cron.php > /var/log/moodle_cron.log" >> /etc/crontab
RUN (crontab -l ; echo "*/1 * * * * root php -q -f /var/www/html/moodle/admin/cli/cron.php > /var/log/apache2/moodle_cron.log" >> /var/log/apache2/cron.log) | crontab
#Define o UID e GID do usuário/grupo www-data para ser o mesmo do usuário e grupo do host
RUN usermod -u 33 www-data && groupmod -g 33 www-data
#Copia para dentro do container o arquivo de virtualhost da porta 80 e 443
ADD default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
#ADD 000-default.conf /etc/apache2/sites-available/000-default.conf
#Habilita o virtualhost da porta 80 e 443
#RUN a2ensite default-ssl.conf
RUN a2ensite 000-default.conf
#Habilita supote para módulos do php: rewrite, headers, expires e ssl
#RUN a2enmod rewrite && a2enmod headers && a2enmod expires && a2enmod ssl
RUN a2enmod rewrite && a2enmod headers && a2enmod expires
#Define o correto nome do servidor para remover warning do log do docker
RUN echo "ServerName campusvirtual2.com" >> /etc/apache2/apache2.conf
#Abre as portas 80 e 443
EXPOSE 80 
