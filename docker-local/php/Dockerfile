FROM php:8.1.12-fpm

RUN mkdir -p /var/www/html
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    cron \
    procps \
    libmagickwand-dev --no-install-recommends \
    libmemcached-dev

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www


RUN apt-get install -y supervisor

ADD ./docker-local/php/supervisor/conf.d /etc/supervisor/conf.d

RUN touch /var/run/supervisor.sock \
&& chmod 777 /var/run/supervisor.sock

# Copy existing application directory content
ADD ./src /var/www/html

RUN chown -R www:www /var/www

ADD ./docker-local/php/scripts/start.sh /start.sh
RUN chmod +x /start.sh

# Add crontab file
COPY ./docker-local/php/crontab /etc/cron.d/crontab

# Give execution rights on the cron job
RUN chmod 0644 /etc/cron.d/crontab

# Apply cron job
RUN crontab /etc/cron.d/crontab

# Create the log file to be able to run tail
RUN touch /var/log/cron.log

# Installing xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Installing imagick
RUN pecl install imagick \
    && docker-php-ext-enable imagick

#RUN git clone https://github.com/php-memcached-dev/php-memcached /usr/src/php/ext/memcached \
#  && cd /usr/src/php/ext/memcached \
#  && docker-php-ext-configure memcached \
#  && docker-php-ext-install memcached

EXPOSE 9000

CMD ["/start.sh"]

