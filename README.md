# yaf++
yaf++ is one advanced web [application] framework. It's a out-of-the-box [yaf](https://github.com/laruence/yaf).

## Getting started
- Use `composer` & `yarn` to intall all needed packages.`bower` deprecated!
```
    git clone git@github.com:forevernull/yaf_plus_plus.git YOURWEBROOT
    cd YOURWEBROOT
    yarn install
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
        fastcgi_pass   127.0.0.1:9000;
        fastcgi_index  index.php;
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

