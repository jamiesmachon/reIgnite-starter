# PHP 7.4 and MariaDB Docker Box with HTTPS

## Follow procedure as follows:

## Get your SSL Certificates

***If you have a certificate put the .crt & .key files inside init/certs/ folder and continue creating .env file

Your will need the following two article for reference a breakdown is provided here

https://macappstore.org/openssl/
<br>
https://www.section.io/engineering-education/how-to-get-ssl-https-for-localhost/

### Assuming you have brew package manager installed already

* Open terminal and run the following command:

```
brew install openssl
```

* Follow the onscreen instructions to add OpenSSL to your systems environment
* Create a new certs directory and cd into it using the below command

```
mkdir /usr/local/opt/openssl@3/certs && cd /usr/local/opt/openssl@3/certs
```

* Generate a CA.key certificate for localhost

```
openssl genrsa -out CA.key -des3 2048
```

* Give it a passphrase you wont forget like you computers password lolz
* Now generate a root CA.pen certificate by running the following command

```
openssl req -x509 -sha256 -new -nodes -days 3650 -key CA.key -out CA.pem
```

* Fill in the questionnaire

```
Country Name (2 letter code) []:UK
State or Province Name (full name) []:South Yorkshire
Locality Name (eg, city) []:Rotherham
Organization Name (eg, company) []:NextPixel 
Organizational Unit Name (eg, section) []:Digital
Common Name (eg, fully qualified host name) []:NextPixel
Email Address []:hello@nextpixel.com
```

* Make a new directory named localhost and cd into it

```
mkdir localhost && cd localhost
```

* Create a file called .ext file

```
joe soros.ext
```

* Add the following content, you can add additional domain by adding DNS.2, DNS.3 etc... DON'T forget to update your
  /etc/hosts file

```
authorityKeyIdentifier = keyid,issuer
basicConstraints = CA:FALSE
keyUsage = digitalSignature, nonRepudiation, keyEncipherment, dataEncipherment
subjectAltName = @alt_names

[alt_names]
IP.1 = 127.0.0.1
DNS.1 = localhost
DNS.2 = soros.local
```

* Now run the below command to generate a localhost private key

```
openssl genrsa -out soros.key -des3 2048
```

* Now generate your CSR (Certificate Signing Request)

```
openssl req -new -key soros.key -out soros.csr
```

* Fill in the questionnaire

```
Country Name (2 letter code) []:UK
State or Province Name (full name) []:South Yorkshire
Locality Name (eg, city) []:Rotherham
Organization Name (eg, company) []:NextPixel 
Organizational Unit Name (eg, section) []:Digital
Common Name (eg, fully qualified host name) []:NextPixel
Email Address []:hello@nextpixel.com
```

### WE GOT THERE

* Now we can create a certificate for the local project in question
* cd into the certs directory in this docker directory and run the below command

```
openssl x509 -req -in /usr/local/opt/openssl@3/certs/localhost/soros.csr -CA /usr/local/opt/openssl@3/certs/CA.pem -CAkey /usr/local/opt/openssl@3/certs/CA.key -CAcreateserial -days 3650 -sha256 -extfile /usr/local/opt/openssl@3/certs/localhost/soros.ext -out soros.local.crt
```

* Now we can create a certificate for the local project in question
* Please modify the ENTER_YOUR_DOMAIN_NAME with your domains url

```
openssl rsa -in /usr/local/opt/openssl@3/certs/localhost/soros.key -out soros.local.decrypted.key
```

## Create your nginx.conf file

* Now create using path init/config/nginx/nginx.conf file and enter the below config

```
events {
  worker_connections 1024;
}

http {
  include       /etc/nginx/mime.types;
  sendfile off;
  
  server {
    listen 80;
    server_name soros.local;
    return 301 https://$host$request_uri;
  }

  server {
    listen 443 ssl;
    server_name soros.local;
    index index.php;
	root        /var/www/html;
    ssl_certificate /etc/nginx/certs/soros.local.crt;
    ssl_certificate_key /etc/nginx/certs/soros.local.decrypted.key;
    ssl_protocols TLSv1 TLSv1.1 TLSv1.2;
    ssl_ciphers HIGH:!aNULL:!MD5;

    location / {
      try_files $uri $uri/ /index.php$is_args$args;
      proxy_buffering off;
      proxy_set_header X-Forwarded-Proto $scheme;
      proxy_set_header X-Forwarded-Host $host;
      proxy_set_header X-Forwarded-Port $server_port;
    }

   location ~ \.php$ {
          fastcgi_pass php:9000;
          fastcgi_read_timeout 240;
          fastcgi_split_path_info ^(.+\.php)(/.+)$;
          fastcgi_index index.php;
          include fastcgi_params;
          fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
          fastcgi_param PATH_INFO $fastcgi_path_info;
       }

   }
}
```

### Import .pem file inside Mozilla Firefox

* We have to 'force' Mozilla Firefox to trust our certificate and treat it as a certified WebSite, because browser don't
  trust self issued certificates.
* At Mozilla Firefox bar we go to Application (Hamburger) menu -> Settings -> Privacy & Security -> View Certificates.
* When the popup window appears, we click import and select the file from the following path ->
  /usr/local/opt/openssl@3/certs/CA.pem
* We import the file, check trust both tickboxes. Now Mozilla Firefox should be able to trust our self created
  certificate.

## Final step:

* Run the below command to build your docker box. If everything went correctly you should be able to run with HTTPS.

```
docker-compose up --build
```

<br><br>

## Issues

### If historyheraldryo_local_integration database does not exists in our Schema, we have to run the following commands to clear volumes and rerun the build procedure:<br>

Shut down the server

```
docker-compose down
```

List the name of the volume we use

```
docker volume ls
```

Remove volume, in my case <b>soros_db_data</b> is the <b>volume name</b>, replace it with yours

```
docker volume rm ###docker_db_data_volume_name###
```

Build the volumes and environment again

```
docker-compose up --build
```