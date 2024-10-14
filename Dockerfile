FROM php:8.1-fpm

# 必要なパッケージをインストールし、pdo_mysql拡張を有効化
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql
