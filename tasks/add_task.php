<?php
    require_once('../boot.php');

    if (isset($_SESSION['login']) && isset($_POST['task'])) {
        $login = $_SESSION['login'];
        $task = $_POST['task'];

        //Get user ID from table
        $sel_query = "SELECT * FROM users WHERE login = '$login'";
        $sel_result = get_mysqli()->query($sel_query);
        $user_id = $sel_result->fetch_row()[0];
        
        //Insert new task in DB
        $task = $_POST['task'];
        $ins_query = "INSERT INTO tasks (user_id, task) VALUES ('$user_id', '$task')";
        $ins_result = get_mysqli()->query($ins_query);
        
        header('Location: task.php');
        
        /* if ($ins_result) {
            // Message and redirect back to the task page
            echo '<script>alert("Задача записана УСПЕШНО!")</script>';

            header('refresh:2;url=task.php');
        } */
    } else {
        echo '<script>alert("Создание задачи доступно только после АВТОРИЗАЦИИ!")</script>';

        //header('refresh:2;url=task.php');
    }     
?>