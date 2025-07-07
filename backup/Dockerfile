FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive
RUN ln -fs /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime && \
    apt update && \
    apt install -y \
      tzdata \
      tar \
      gzip \
      postgresql-client \
      cron \
      awscli \
      bash && \
    dpkg-reconfigure -f noninteractive tzdata

COPY backup-script.sh /usr/local/bin/backup-script.sh
RUN chmod +x /usr/local/bin/backup-script.sh

# Adiciona entrada no crontab via arquivo
COPY crontab.txt /etc/cron.d/backup-cron
RUN chmod 0644 /etc/cron.d/backup-cron && \
    crontab /etc/cron.d/backup-cron

RUN touch /var/log/cron.log && chmod 666 /var/log/cron.log
# Start cron foreground
#CMD ["cron", "-f"]
CMD ["sh", "-c", "cron && tail -f /var/log/cron.log"]
