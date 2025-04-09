FROM php:8.2-apache

RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY ./public /var/www/html/
COPY ./includes /var/www/html/includes/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
COPY start.sh /start.sh
RUN chmod +x /start.sh
CMD ["/start.sh"]

