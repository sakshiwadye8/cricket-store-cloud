FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy project files to container
COPY . /var/www/html/

# Give permissions
RUN chown -R www-data:www-data /var/www/html