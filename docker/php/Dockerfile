# ベースイメージとしてPHP 8.3 FPM（FastCGI Process Manager）を使用
FROM php:8.3-fpm

# 必要なパッケージとPHP拡張機能のインストール
RUN apt-get update \
    && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring zip

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 作業ディレクトリの設定
WORKDIR /var/www/html