FROM debian:bullseye


ENV HTTPD_PREFIX /usr/local/apache2
ENV PATH $HTTPD_PREFIX/bin:$PATH
RUN mkdir -p "$HTTPD_PREFIX" \
    && chown www-data:www-data "$HTTPD_PREFIX"
WORKDIR $HTTPD_PREFIX

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    apache2 curl \
    && rm -r /var/lib/apt/lists/*
RUN a2enmod proxy_fcgi ssl rewrite proxy proxy_balancer proxy_http proxy_ajp
RUN sed -i '/Global configuration/a \
ServerName localhost \
' /etc/apache2/apache2.conf

RUN sed -i '/ServerTokens OS/a \
ServerTokens Prod \
' /etc/apache2/conf-enabled/security.conf

RUN sed -i '/SSLProtocol all -SSLv3/a \
SSLProtocol -all +TLSv1.2 \
' /etc/apache2/mods-enabled/ssl.conf

RUN sed -i '/ServerSignature On/a \
    ServerSignature Off \
    ' /etc/apache2/conf-enabled/security.conf

EXPOSE 443
RUN rm -f /run/apache2/apache2.pid
CMD apachectl  -DFOREGROUND -e info
