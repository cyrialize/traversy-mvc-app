# What is this?

This repository contains the code created while following along with the [Object Oriented PHP & MVC course](https://www.udemy.com/course/object-oriented-php-mvc/) by [Traversy Media](https://www.traversymedia.com/).

This code is the result of the entire course, while my repo [here](https://github.com/cyrialize/traversy-mvc) is just sections 1 - 4.

All notes in the `readme.md` of that repository apply here.

# Why a separate repo?

In sections 1 - 4 of the course you create a framework. Sections 5 - 6 you create an application within that framework.

I wanted to keep the framework seperate for reference purposes.

# Setting it up on Linux

See the [other repo](https://github.com/cyrialize/traversy-mvc) for the full set up steps.

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

# SQL

See `app.sql` for the SQL queries you could run for setting up the database (if you don't use PHPMyAdmin).

# Course Review

## What I liked

- We built an entire application using plain PHP and nothing else. 

## What I disliked

There were many things I didn't like about the course, but I would still recommend it. To me it looked like the course was made all in one go without any breaks. That's a crazy achievement considering Brad shows you how to build a framework in PHP and then builds an application with it. Doing it all in one go means that there's bound to be mistakes.

Additionally, the main purpose of the course was to learn, not to build a professional application. In that sense I can understand why certain things weren't fully implemented (like error checking). Are there other courses that are more thorough? Probably. Still, the length of this course and the content of it make it quite good.

Some of the issues below I addressed while doing the course, some of the other issues I will address in the future.

- Some coding style 
- No `docblocks` on methods 
- No error message handling (e.g. we did `die('Something went wrong!');` instead of showing an error page or 404 page)
- Some logic was superfluous - for example the original code for the session helper had unnecessary `if` statements 
- The queries used often were `SELECT *` when they didn't need to be
- The `Database` class is OK - I thought it wasn't really needed and we could have used `PDO` directly
- I didn't like that we would pass an array of `$data` that was meant for the view to Controllers and Models - I'd rather we explicitly pass what we needed rather than passing an array and looking within the array for our data 
- I didn't like that we would use the `$data` array for error checking (e.g. `if (!empty($data['user_id'])))`) 