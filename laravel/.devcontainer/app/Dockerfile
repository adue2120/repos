FROM php:7.4-fpm 

# composer の インストール 
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# パッケージ の インストール
RUN apt-get update && apt-get install -y \ 
    tzdata \ 
    zip \
    unzip \ 
&& pecl install xdebug \ 
&& docker-php-ext-install pdo_mysql \ 
&& rm -rf /var/lib/apt/lists/* 

# タイム ゾーン を 設定 する 環境変数
ENV TZ=Asia/Tokyo