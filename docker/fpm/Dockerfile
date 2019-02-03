FROM php:7.3-fpm-alpine

# Install modules
RUN apt-get update && apt-get install -y --force-yes \
        libpq-dev \
        libgmp-dev \
        libgmp3-dev \
        wget \
        cron \
        libmcrypt-dev \
        zip \
        unzip \
        git \
        newrelic-php5 \
        librabbitmq-dev \
    && ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/include/gmp.h \
    && rm -rf /usr/local/php \
    && docker-php-ext-install gmp mbstring bcmath pgsql pdo_pgsql \
    && docker-php-ext-install -j$(nproc) mcrypt \
    && docker-php-ext-enable opcache \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && pecl -d preferred_state=stable install amqp-1.7.0 \
    && docker-php-ext-enable amqp \
    && rm -rf /tmp/pear \
    && apt-get purge -y libpq-dev libgmp-dev libgmp3-dev libmcrypt-dev \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean

VOLUME ["/var/www/app"]
WORKDIR /var/www/app

CMD ["php-fpm"]
