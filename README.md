# yaf_plus_plus
yaf + composer + bower

## Getting started
- User `composer` & `bower` to intall all needed packages 
```
    git clone git@github.com:forevernull/yaf_plus_plus.git YOURWEBROOT
    cd YOURWEBROOT
    bower install
    composer install 
```
- Modefy your nginx configuration like this
```
server {
    listen       80;
    server_name  _;
    
    location / {
        root   YOURWEBROOT/yaf_plus_plus/public;
        index  index.php index.html index.htm;

        if (!-e $request_filename){
            rewrite ^/(.*) /index.php?$1 last;
        }
    }

    location ~ \.php$ {
        root           YOURWEBROOT/yaf_plus_plus/public;
        fastcgi_pass   php-fpm;
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include        fastcgi_params;
    }
}
```
