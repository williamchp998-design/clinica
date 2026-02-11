FROM php:8.2-cli

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar proyecto
WORKDIR /app
COPY . .

# Exponer puerto dinámico de Railway
EXPOSE 8080

# Iniciar servidor PHP
CMD php -S 0.0.0.0:$PORT -t public