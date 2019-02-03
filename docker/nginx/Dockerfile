FROM nginx:1.15

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y openssl
RUN mkdir /etc/nginx/ssl

RUN openssl req -x509 -out /etc/nginx/ssl/localhost.crt -keyout /etc/nginx/ssl/localhost.key \
  -newkey rsa:2048 -nodes -sha256 \
  -subj '/CN=http2.example' -days 365
