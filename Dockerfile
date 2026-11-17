FROM richarvey/nginx-php-fpm:latest

# Instalar Node.js y NPM para compilar Vite
RUN apk add --update nodejs npm

COPY . .

# Instalar dependencias de Composer y compilar Vite en la construcción
RUN composer install --no-dev --working-dir=/var/www/html
RUN npm install && npm run build

ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 0

EXPOSE 80