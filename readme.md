## bookings website based on laravel 5.1.11

- windows environment setup,
```
    1. download php 5.6.17 VC11 x86 Non Thread Safe
       (1) add php.exe folder to PATH environment
       (2) edit php.ini file, uncomment below lines,
       
           ; extension_dir = "ext"
           ;extension=php_mbstring.dll
           ;extension=php_mysql.dll
           ;extension=php_openssl.dll
           ;extension=php_pdo_mysql.dll
           ;extension=php_pdo_pgsql.dll
           ;extension=php_pdo_sqlite.dll
           ;extension=php_pgsql.dll
           
    2. git clone https://github.com/perrywang/booking.git <your folder>
    3. cd <your folder> at step #2
    4. php composer.phar install
    5. php artisan serve
    6. goto http://localhost:8000/
    7. if you see laravel welcome page the configuration succeed
```
- create tables in database
```
    1. dev environment will use sqlite database
    2. dev database has been configured in config\database.php
    3. bookings.sqlite can be found in storage folder
    4. create table migration files has been at folder database\migrations
    5. just at project folder fun php.exe artisan migrate:refresh to create all the tables

```


# **FRONT END DEVELOPMENT** #

----------
## RUN ##

1. enter folder `Frontend`
2. execute command `npm install`
	1. you may need to run it via admin
3. to start dev server - run command `npm start`
	1. changes on code will auto re-compile and update to browser in runtime
	2. to stop, use `ctrl-c`
3. to build - run command `npm run dist`, built artifacts locate in dist folder
4. to clean build folder - run `npm run clean`
5. to run dev server based on built artifacts - run command `npm run serve:dist`

## Config ##

1. dev server port (default 8000) - cfg/base.js


## REFERENCE ##

1. REACTjs
	1. [official doc](http://facebook.github.io/react/docs/getting-started.html) finish reading in 2-3 days
	2.  [webpack](http://webpack.github.io/docs/) no need to read through.
		1.  [handbook chinese version](https://fakefish.github.io/react-webpack-cookbook/index.html)
	3.  [react+webpack tutorial](http://survivejs.com/)
4.  REACTnative
	1.  
