FROM php:8.2-apache

# Habilita mod_rewrite (opcional pero común)
RUN a2enmod rewrite

# Copia tu proyecto al directorio web de Apache
COPY ./public /var/www/html/
COPY ./includes /var/www/html/includes/

# Establece el directorio de trabajo
WORKDIR /var/www/html/

# Da permisos adecuados
RUN chown -R www-data:www-data /var/www/html
