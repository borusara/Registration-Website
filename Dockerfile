# Set the base image to PHP with Apache server
FROM php:7.4-apache

# Install system dependencies
RUN apt-get update && \
    apt-get install -y libzip-dev zip && \
    docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set the working directory inside the container
WORKDIR /app

# Copy the application files into the container
COPY . .

# Install PHP dependencies using Composer
RUN composer install --no-dev --optimize-autoloader

# Set up Apache virtual host configuration
RUN echo "DocumentRoot /app" >> /etc/apache2/sites-available/000-default.conf

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Expose the container port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
