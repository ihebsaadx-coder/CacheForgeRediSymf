FROM phpmyadmin/phpmyadmin

RUN a2enmod ssl

RUN sed -ri -e 's,80,443,' /etc/apache2/sites-available/000-default.conf
RUN sed -i -e '/^<\/VirtualHost>/i SSLEngine on' /etc/apache2/sites-available/000-default.conf

RUN sed -i '/ServerTokens OS/a \
    ServerTokens Prod \
    ' /etc/apache2/conf-enabled/security.conf

RUN sed -i '/ServerSignature On/a \
    ServerSignature Off \
    ' /etc/apache2/conf-enabled/security.conf

    
RUN sed -i '/SSLProtocol all -SSLv3/a \
SSLProtocol -all +TLSv1.2 \
' /etc/apache2/mods-enabled/ssl.conf

RUN sed -i -e '/^<\/VirtualHost>/i SSLCertificateFile /cert/laragon.crt' /etc/apache2/sites-available/000-default.conf
RUN sed -i -e '/^<\/VirtualHost>/i SSLCertificateKeyFile /cert/laragon.key' /etc/apache2/sites-available/000-default.conf

EXPOSE 443