FROM conetix/wordpress-with-wp-cli

RUN apt-get update && apt-get install -my wget gnupg apt-transport-https libpng-dev

RUN curl -sL https://deb.nodesource.com/setup_9.x | sudo -E bash -

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list

RUN apt-get update && apt-get -yq install nodejs yarn

RUN php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');"
RUN php /tmp/composer-setup.php --install-dir=/usr/local/bin
RUN rm /tmp/composer-setup.php
RUN mv /usr/local/bin/composer.phar /usr/local/bin/composer
