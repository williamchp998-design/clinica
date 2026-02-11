FROM php:8.2-cli-alpine

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Directorio de trabajo
WORKDIR /app

# Copiar archivos del proyecto
COPY . .

# Exponer puerto
EXPOSE 8080

# Iniciar servidor usando puerto de Railway
CMD php -S 0.0.0.0:${PORT:-8080} -t public
