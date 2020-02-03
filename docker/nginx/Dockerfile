FROM nginx:stable

RUN apt-get update -y && \
    apt-get upgrade -y

RUN mkdir -p /var/www/html
RUN chown -R www-data:www-data /var/www/html
