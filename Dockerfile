FROM php:8.2-apache

RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copiamos los archivos públicos y los includes
COPY ./public /var/www/html/
COPY ./includes /var/www/html/includes/

# Damos permisos
RUN chown -R www-data:www-data /var/www/html

# Copiamos y damos permisos al script de inicio
COPY start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80
CMD ["/start.sh"]
