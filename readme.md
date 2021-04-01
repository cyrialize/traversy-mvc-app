# What is this?

This repository contains the code created while following along with the [Object Oriented PHP & MVC course](https://www.udemy.com/course/object-oriented-php-mvc/) by [Traversy Media](https://www.traversymedia.com/).

This code is the result of the entire course, while my repo [here](https://github.com/cyrialize/traversy-mvc) is just sections 1 - 4.

All notes in the `readme.md` of that repository apply here.

# Why a separate repo?

In sections 1 - 4 of the course you create a framework. Sections 5 - 6 you create an application within that framework.

I wanted to keep the framework seperate for reference purposes.

# Setting it up on Linux

See the [other repo](https://github.com/cyrialize/traversy-mvc) for full set up steps.

Change the section you added in `etc/apache2/apache2.conf` to the following:
```
Listen 8000
<VirtualHost *:8000>
    DocumentRoot /home/mxjonny/Code/traversy-mvc-app/
    <Directory /home/mxjonny/Code/traversy-mvc-app/>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```