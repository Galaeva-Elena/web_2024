<?php
require_once('../boot.php');

$title = "Разработка WEB-приложений";
$page_title = "Список задач (скрытая страница, асинхронно)";

if (isset($_SESSION['login']))
{
    $content = file_get_contents("task_async_content.php");
} else {
    $content = "Данные доступны только после АВТОРИЗАЦИИ!";
    //header("Location: ../login/login.php");
}

include("../components/layout.php");
?>