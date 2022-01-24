<?php
session_start();
/*include 'loginCredentials.php';*/

$host = $_SERVER['HTTP_HOST'];
//dd function
function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    /* die();*/
}



/*$dummy = array(
    [
        "mail1" => "d",
        "mail2" => "dd",
        "mail3" => "ddd",
        "mail4" => "dddd",

    ]
);*/


/*
$users = array();
$users["email"]= "d";
$users["pass"]= "d";*/


$user_info = array(

    "Kushal@mail.com"=>"123",
    "WICC"=>"345",
    "Saurav"=>"567",
    "Biswonath"=>"789",

);


/*
echo "<pre>";
print_r($users);
echo "</pre>";*/


$flag = 0;

if(isset($_POST['email']) && isset($_POST['pass']) )
{
    echo ' ISSET';
    echo '<br>';
    echo '<br>';


    $email = $_POST['email'];
    $pass = $_POST['pass'];





    /*$emails == $email && $password == $pass*/

   foreach ($user_info as $key=> $value)
   {


           if( $key == $email && $value == $pass)
           {
               echo "THE PASSWORD WORKED <br>";
               $flag = 1;
           }


           else
           {
               echo "THE PASSWORD DIDNT WORK <br>";
               $flag = 0;
           }
           break;


   }
}
else {
    echo '<br>';
    echo 'NOT ISSET';
    echo '<br>';
    echo '<br>';
    echo '<br>';
}


if($flag == 1)
{
    $cookieMail = $email;
    $cookiePass = $pass;





    setcookie($cookieMail, $cookiePass, time()+(86400 * 30), "/cookieInfo");
    $GLOBALS['a'] = $cookieMail;
    $GLOBALS['b'] = $cookiePass;
    header("Location: http://{$host}/cookieInfo.php");

}
/*require 'cookieInfo.php';*/