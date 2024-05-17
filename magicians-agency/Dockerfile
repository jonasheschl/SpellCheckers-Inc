FROM php:8.0-apache

WORKDIR /var/www/html

COPY flag.txt /flag.txt

COPY src/ .

RUN useradd --user-group --system --create-home --no-log-init app

RUN chown app magicians

USER app

ENV HOME=/home/app
