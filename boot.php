<?php 
session_start();
function get_mysqli()
{
    static $mysqli;
    if (!$mysqli)
    {
        $config = include('bd_config.php');
        $mysqli = new mysqli($config['db_host'], $config['db_user'], $config['db_pwd'], $config['db_name']);
    }
    return $mysqli;
}
?>