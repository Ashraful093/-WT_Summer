<?php
if (isset($_POST['Submit']))

{

    $name = $_REQUEST['fname'];
        if ($name == '')
 
    {
        echo 'Please Enter a valid First Name';
    }
         else
    {
        echo 'Your First Name is ' . $name;
    }
    echo '<br>';

    $name2 = $_REQUEST['lname'];
        if ($name2 == '')
    {
        echo 'Please Enter a valid Last Name';
    } else
    {
        echo 'Your Last Name is ' . $name2;
    }

    echo '<br>';

    $Age = $_REQUEST['age'];

        if ($Age == '')
    {
        echo 'Please Enter your Age ';
    } else
    {
        echo 'Your Age is ' . $Age;
    }

    echo '<br>';
   
    if (
        isset($_POST['designation1']) ||   
        isset($_POST['designation2']) ||
        isset($_POST['designation3']))
        {
        if (isset($_POST['designation1'])) {
            echo 'You  Select Junior Programmer ';
            echo '<br>';
        }
        if (isset($_POST['designation2'])) {
            echo 'You  Select Senior Programmer';
            echo '<br>';
        }
        if (isset($_POST['designation3'])) {
            echo 'You  Select Project Lead';
            echo '<br>';
        }
    } else {
        echo 'You havent selected anything';
    }

    echo '<br>';

   
    if (
        isset($_POST['PreferredLanguage1']) ||
        isset($_POST['PreferredLanguage2']) ||
        isset($_POST['PreferredLanguage3'])) {
        if (isset($_POST['PreferredLanguage1'])) {
            echo 'You  Select JAVA ';
            echo '<br>';
        }

        if (isset($_POST['PreferredLanguage2'])) {
            echo 'You  Select PHP';
            echo '<br>';
        }
        if (isset($_POST['PreferredLanguage3'])) {
            echo 'You  Select C++';
            echo '<br>';
        }
    }
    else {
        echo 'You Havent Select a checkbox';
        echo '<br>';
    }


    $Password = $_REQUEST['password'];
    if (strlen($Password) < 5) {
        echo 'Enter a valid password';
    } else
     {
        echo 'password is valid';
    }

}
?>
