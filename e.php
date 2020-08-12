<?php
        $name  = $_COOKIE['name'];
        $uname = $_COOKIE['userName'];
        $email = $_COOKIE['email'];
        $day   = $_COOKIE['day'];
        $month = $_COOKIE['month'];
        $year  = $_COOKIE['year'];

    session_start();

    if(isset($_POST['submit']))
    {
        

        if(empty($name) || empty($uname) || empty($email) || empty($day) || empty($month) || empty($year))
        {
            echo "please fillup all";
        }
        else 
        {
            $name = $_POST['name'];
            $uname = $_POST['userName'];
            $email = $_POST['email'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];

            setcookie('name', $name, time()+3600, '/');
            setcookie('userName', $uname, time()+3600, '/');
            setcookie('email', $email, time()+3600, '/');
            setcookie('day', $day, time()+3600, '/');
            setcookie('month', $month, time()+3600, '/');
            setcookie('year', $year, time()+3600, '/');
            
            echo "cookie set";

            header('location: editprofile.php');
        }
    }
    else
    {
        echo "cookie not set";
    }

?>
