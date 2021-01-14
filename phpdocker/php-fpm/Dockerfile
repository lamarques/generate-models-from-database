FROM php:fpm
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php8.0-memcached php8.0-mysql php8.0-redis php8.0-xdebug php8.0-bcmath php8.0-bz2 php8.0-gd php8.0-intl php8.0-ldap php8.0-mongodb php8.0-snmp php8.0-soap php8.0-xmlrpc php8.0-xsl php8.0-yaml php8.0-zmq \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN php -v
