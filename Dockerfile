FROM php:8.2-cli

RUN docker-php-ext-install pdo_mysql pdo_sqlite

WORKDIR /app

COPY . .

RUN mkdir -p data backend/uploads && chmod +x /app/start.sh

EXPOSE ${PORT:-8080}

CMD ["/app/start.sh"]
