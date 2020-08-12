<?php
    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['userName']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['day']) || empty($_POST['month']) || empty($_POST['year']) ||  empty($_POST['pass']) )
        {
            echo "please fillup all";
        }
        else 
        {
            $name = $_POST['name'];
            $uname = $_POST['userName'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $pass = $_POST['pass'];

            setcookie('name', $name, time()+3600, '/');
            setcookie('userName', $uname, time()+3600, '/');
            setcookie('email', $email, time()+3600, '/');
            setcookie('gender', $gender, time()+3600, '/');
            setcookie('day', $day, time()+3600, '/');
            setcookie('month', $month, time()+3600, '/');
            setcookie('year', $year, time()+3600, '/');
             setcookie('pass', $pass, time()+3600, '/');
            
            echo "cookie set";

            header('location: delete_account.php');
        }
    }
    else
    {
        echo "cookie not set";
    }

?>