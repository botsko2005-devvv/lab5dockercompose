# Базовий образ PHP-FPM
FROM php:8.2-fpm

# Встановлюємо розширення для роботи з MySQL
RUN docker-php-ext-install mysqli pdo_mysql
