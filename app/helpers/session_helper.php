<?php

session_start();

// EXAMPLE - flash('register_success', 'You are now registered');
// DISPLAY IN VIEW - echo flash();
function flash($name = '', $message = '', $class = 'alert alert-success') 
{
    if (!empty($name)) {

        if (!empty($message) && empty($_SESSION[$name])) {
    
            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;

        } else if (empty($message) && !empty($_SESSION[$name])) {

            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo "<div class='$class' id='msg-flash'>{$_SESSION[$name]}</div>";
    
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}

function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}