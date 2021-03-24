# What is this?

This repository contains the code created while following along with the [Object Oriented PHP & MVC course](https://www.udemy.com/course/object-oriented-php-mvc/) by [Traversy Media](https://www.traversymedia.com/).

The code isn't exactly the same as what is presented within the course. There are some minor differences, like spacing, curly brackets, style, etc. See below for more details.

# Why do this course?

Creating your own framework is a great way (in my opinion) to understand the inner workings of frameworks and to become familiar with PHP. 

It also opens you up to the possibilities of _not_ using a framework when working on a project.

# Differences between this code and the course
- I went through this course on Linux instead of Windows, so my setup was different (see the section below on how to set it up for Linux)
- For `config.php` I created a `config.ini` file to load in sensitive things and added `config.ini` to the `.gitignore`
- Anytime there were single quotes with strings being appended, I switched them to double quotes and string interpolation (just my personal preference)

# Setting it up on Linux

Since `.htaccess` files are used for routing, you cannot use [PHP's built in server](https://www.php.net/manual/en/features.commandline.webserver.php), e.g. `php -S localhost:8000`. 

Instead, you'll have to set up a virtual host on apache. This will also fix the following errors:
- `Internal Server 500` showing up on the web page
- `AH00124: Request exceeded the limit of 10 internal redirects due to probable configuration error. Use 'LimitInternalRecursion' to increase the limit if necessary. Use 'LogLevel debug' to get a backtrace.` showing up on the error log

You'll also need to change the line 7 in `public/.htaccess` to include a forward slash before `index.php`
- `RewriteRule  ^(.+)$ /index.php?url=$1 [QSA,L]`

The following steps were completed on Ubuntu 20.04: 
- Install PHP for apache: `sudo apt install libapache2-mod-php7.4`
  - If you run into an error that looks like this: 
  ```
  The following packages have unmet dependencies:
  libapache2-mod-php7.4 : Depends: php7.4-common (= 7.4.3-4ubuntu2.4) but 7.4.9-1+ubuntu18.04.1+deb.sury.org+1 is to be installed
  E: Unable to correct problems, you have held broken packages.
  ```
  - You can fix it with: `sudo apt remove php7.4-common` and attempting to re-install
- Turn on the php mod for apache: `sudo a2enmod php7.4`
- Turn on rewrites for apache: `sudo a2enmod rewrite`
- Open an editor for `etc/apache2/apache2.conf`
- Add the following:
```
Listen 8000
<VirtualHost *:8000>
    DocumentRoot /home/mxjonny/Code/traversymvc/
    <Directory /home/mxjonny/Code/traversymvc/>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
- You can replace `8000` with whatever port your prefer for `localhost`
- Replace the path that comes after `DocumentRoot` and `Directory` with the path to your code 
- Run `sudo systemctl stop apache2` to stop apache
- Run `sudo systemctl start apache2` to start apache 
- Run `sudo systemctl restart apache2` to restart apache


# Other Resources

I'm a big fan of the [No Framework Tutorial](https://github.com/PatrickLouys/no-framework-tutorial) by [Patrick Louys](https://github.com/PatrickLouys).

# TODOs
- [ ] Add doc blocks to all of the functions