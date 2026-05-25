FROM php:8.2-cli

# Install PDO MySQL extension
RUN docker-php-ext-install pdo_mysql

WORKDIR /app

COPY backend/ ./backend/

EXPOSE ${PORT:-8080}

CMD php -S 0.0.0.0:${PORT:-8080} -t backend
