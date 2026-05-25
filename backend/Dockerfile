FROM php:8.1-apache

# Install common PHP extensions used by the project
RUN docker-php-ext-install pdo pdo_mysql || true

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy application files into the container
COPY . /var/www/html/

# Ensure proper permissions for Apache
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
