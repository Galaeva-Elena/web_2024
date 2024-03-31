<?php
    require_once('../boot.php');

    if (isset($_POST['auth'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        if($login != "" && $password != "")
        {
            //Check login in DB
            $login_query = "SELECT * FROM users WHERE login = '$login' and password = $password ";
            $login_result = get_mysqli()->query($login_query);

            if (mysqli_num_rows($login_result) > 0) {   
                $_SESSION['login'] = $login;

                //Redirect to the task page
                header('Location: ../tasks/task.php');
            } else {
                // Message and redirect back to the login page
                echo '<script>alert("Неправильный  ЛОГИН/ПАРОЛЬ.")</script>';
                
                header('refresh:2;url=../login/login.php');
            }
        } 
    }
?>