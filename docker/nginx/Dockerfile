FROM nginx:1.15

# Install modules
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y openssl
# RUN apt-get install letsencrypt -y
RUN mkdir /etc/nginx/ssl
# RUN letsencrypt certonly --webroot -w /etc/nginx/ssl -d www.app.local -d app.local --agree-tos

# RUN openssl req –new –newkey rsa:2048 –nodes –keyout /etc/nginx/ssl/localhost.key –out /etc/nginx/ssl/localhost.csr

RUN openssl req -x509 -out /etc/nginx/ssl/localhost.crt -keyout /etc/nginx/ssl/localhost.key \
  -newkey rsa:2048 -nodes -sha256 \
  -subj '/CN=app.local' -days 365

RUN openssl req -x509 -out /etc/nginx/ssl/cloud1.crt -keyout /etc/nginx/ssl/cloud1.key \
  -newkey rsa:2048 -nodes -sha256 \
  -subj '/CN=http1.local' -days 365

RUN openssl req -x509 -out /etc/nginx/ssl/cloud2.crt -keyout /etc/nginx/ssl/cloud2.key \
  -newkey rsa:2048 -nodes -sha256 \
  -subj '/CN=http2.local' -days 365

#    -config < \
#    printf "[dn]\nCN=app.local\n[req]\ndistinguished_name = dn\n[EXT]\nsubjectAltName=DNS:app.local\nkeyUsage=digitalSignature\nextendedKeyUsage=serverAuth"

# VOLUME ["/var/www/app"]
# WORKDIR /var/www/app
