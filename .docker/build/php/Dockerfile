# Build arguments
ARG IMAGE=webdevops/php-apache:7.0
ARG APP_PATH=.

FROM $IMAGE

# PHP
ADD ./.docker/build/php/php.ini /opt/docker/etc/php/php.ini

# TimeZone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Rome /etc/localtime \
    && echo Europe/Rome > /etc/timezone

# Run startup command
ADD ./.docker/build/php/startup.sh /opt/docker/bin/service.d/supervisor.d/99-startup.sh
RUN chmod +x /opt/docker/bin/service.d/supervisor.d/99-startup.sh

# Add Apache Rewrite
ADD ./.docker/build/php/symfony.conf /opt/docker/etc/httpd/vhost.common.d

# Add PHP-CS-FIXER
RUN curl -L https://cs.sensiolabs.org/download/php-cs-fixer-v2.phar -o php-cs-fixer
RUN chmod a+x php-cs-fixer
RUN mv php-cs-fixer /usr/local/bin/php-cs-fixer

# Add the source
ADD ${APP_PATH} /app
RUN rm -r /app/.docker

# Set the working directory
WORKDIR /app

# Create custom commands
RUN echo 'alias ll="ls -alF"' >> /etc/bash.bashrc

ARG PROJECT_USER
ADD ./.docker/build/php/.bash_history /home/${PROJECT_USER}/.bash_history