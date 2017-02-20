# yaf++
yaf++ is one advanced web [application] framework.

## Getting started
- Use `composer` & `bower` to intall all needed packages 
```
    git clone git@github.com:forevernull/yaf_plus_plus.git YOURWEBROOT
    cd YOURWEBROOT/yaf_plus_plus
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

## Tips
if `composer` is very slow, please add this to your `composer.json`.
```
"repositories": {
    "packagist": {
        "type": "composer",
        "url": "https://packagist.phpcomposer.com"
    }
}
```

