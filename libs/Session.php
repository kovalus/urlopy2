<?php


class Session
{

    public static function init()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function destroy()
    {
        //unset($_SESSION);
        session_destroy();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION) && array_key_exists($key, $_SESSION)) {
            return $_SESSION[$key];
        }
        return null;
    }
}
