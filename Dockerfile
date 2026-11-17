FROM richarvey/nginx-php-fpm:latest

# Copiar el código del proyecto al contenedor
COPY . .

# Variables de entorno para la imagen
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1

# Exponer el puerto 80
EXPOSE 80