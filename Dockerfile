FROM php:8.2-cli

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Crear directorio de trabajo
WORKDIR /var/www

# Copiar archivos del proyecto
COPY . .

# Dar permisos (importante en Railway/Linux)
RUN chmod -R 755 /var/www

# Exponer puerto dinámico de Railway
EXPOSE 8080

# Usar el puerto que Railway
