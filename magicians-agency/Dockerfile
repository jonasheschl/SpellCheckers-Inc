FROM php:8.0-apache

WORKDIR /var/www/html

COPY flag.txt /flag.txt

COPY src/ .

RUN useradd --user-group --system --create-home --no-log-init app

RUN chown app magicians

USER app

# https://stackoverflow.com/questions/28966198/dockerfile-home-is-not-working-with-add-copy-instructions
ENV HOME=/home/app
