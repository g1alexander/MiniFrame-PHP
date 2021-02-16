<?php

class Utils
{
    public static function deleteSession($name)
    {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function isAdmin($admin)
    {
        if (!isset($_SESSION[$admin])) {
            header('Location:' . _url);
        } else {
            return true;
        }
    }

    public static function alerts($name, $name_alert)
    {
        if (isset($_SESSION[$name]) && $_SESSION[$name] == 'complete') {
            echo "<script>"
            , "swal({"
            , "icon: 'success',"
            , "title: '$name_alert guardado correctamente',"
            , "})"
            , "</script>;";
        } elseif (isset($_SESSION[$name]) && $_SESSION[$name] == 'edit') {
            echo "<script>"
            , "swal({"
            , "icon: 'success',"
            , "title: '$name_alert se editó correctamente',"
            , "})"
            , "</script>;";
        } elseif (isset($_SESSION[$name]) && $_SESSION[$name] == 'delete') {
            echo "<script>"
            , "swal({"
            , "icon: 'success',"
            , "title: '$name_alert se eliminó correctamente',"
            , "})"
            , "</script>;";
        } elseif (isset($_SESSION[$name]) && $_SESSION[$name] == 'failed') {
            echo "<script>"
            , "swal({"
            , "icon: 'error',"
            , "title: 'hubo un error con el $name_alert',"
            , "})"
            , "</script>;";
        }
    }
}