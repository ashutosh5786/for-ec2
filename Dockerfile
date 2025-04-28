FROM php:8.2-cli

# Copy app code
COPY . /var/www/html/

WORKDIR /var/www/html/

RUN apt-get update && apt-get install -y unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "index.php"]
