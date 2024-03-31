<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body class="container">
    <nav class="navbar">
        <ol class="navbar-nav">
            <li class="nav-item">
                <a href="http://localhost:8888/web_2024/reg/reg.php">Регистрация</a>
            </li>
            <li class="nav-item">
                <a href="http://localhost:8888/web_2024/login/login.php">Авторизация</a>
            </li>
            <li class="nav-item">
                <a href="http://localhost:8888/web_2024/tasks/task.php">Список дел</a>
            </li>
            <li class="nav-item">
                <a href="http://localhost:8888/web_2024//tasks/task_async.php">Список дел (асинхронно)</a>
            </li>
            <li class="nav-item">
                <a href="http://localhost:8888/web_2024/login/logout.php">Выход</a>
            </li>
        </ol>
    </nav>
    <h1><?= $page_title ?></h1>
    <main>
        <?= $content ?>
    </main>
</body>
</html>