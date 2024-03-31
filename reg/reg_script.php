<?php
    require_once('../boot.php');

    if (isset($_POST['register'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        if($login != "" && $password != "")
        {
            //Check login in DB
            $check_query = "SELECT * FROM users WHERE login = '$login'";
            $check_result = get_mysqli()->query($check_query);

            if (mysqli_num_rows($check_result) > 0) {
                //Message and redirect back to the reg.php page
                echo '<script>alert("Пользователь с таким логином УЖЕ СУЩЕСТВУЕТ. \nПожалуйста, выберите другой.")</script>';
                
                header('refresh:2;url=reg.php');
            } else {
                //Insert new user in DB
                $ins_query = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
                $ins_result = get_mysqli()->query($ins_query);

                if ($ins_result) {
                    //Message and redirect back to the login page
                    echo '<script>alert("Регистрация прошла УСПЕШНО!")</script>';

                    header('refresh:2;url=../login/login.php');
                }
            }
        } 
    }
?>