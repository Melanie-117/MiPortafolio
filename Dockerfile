# Etapa 1: Compilar assets con Node.js moderno
FROM node:20-alpine AS builder
WORKDIR /app
COPY . .
RUN npm install && npm run build

# Etapa 2: Servidor de producción con PHP y Nginx
FROM richarvey/nginx-php-fpm:latest

WORKDIR /var/www/html
COPY . .

# Copiar los assets compilados desde la etapa anterior
COPY --from=builder /app/public/build ./public/build

RUN composer install --no-dev --working-dir=/var/www/html

ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 0

EXPOSE 80