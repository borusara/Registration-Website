# Set the base image to PHP with Apache server
FROM php:7.4-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy the application files into the container
COPY . /var/www/html/

# Expose the container port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
