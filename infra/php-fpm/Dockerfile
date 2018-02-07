FROM phpdockerio/php72-fpm:latest
WORKDIR "/application"

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.2-mysql \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \
#    && groupadd -g 296800513 usuario \
#    && adduser -u 296823135 -g 296800513 rafael \
#    && gpasswd -a rafael usuario