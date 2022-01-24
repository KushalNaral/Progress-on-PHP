<?php
session_start();


require 'loginCredentials.php';
/*include 'loginCredentials.php';*/



function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
   /* die();*/
}








$uD = 'd';
$udP = 'd';

/*if( isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['email']) && isset($_POST['pass']))
{
   *//* var_dump($_POST['f_name']);
    var_dump($_POST['l_name']);
    var_dump($_POST['email']);
    var_dump($_POST['pass']);*/

/*  $_SESSION['f_name'] = $_POST['f_name'];
    $_SESSION['l_name'] = $_POST['l_name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['pass'] = $_POST['pass'];

    */

$user1 = array(
    [
        'uName' => 'Kushal',
        'uLame' => 'Naral',
        'pass'  => '123',
        'email' => 'Kushal@gmail.com'
    ]
);

$user2 = array(
    [
        'uName' => 'WICC',
        'uLame' => 'inc',
        'pass'  => '345',
        'email' => 'WICC@gmail.com',
    ]
);


$user3 = array(
    [
        'uName' => 'Saurav',
        'uLame' => 'd',
        'pass'  => '567',
        'email' =>  'Saurav@gmail.com',
    ]
);


$user4 = array(
    [
        'uName' => 'Biswonath',
        'uLame' => 'd',
        'pass'  => '789',
        'email' =>  'Biswonath@gmail.com',
    ]
);


$user5 = array(
    [
        'f_name' => 'd',
        'l_name' => 'd',
        'email' => 'd',
        'pass'  => 'd',


    ]
);

$userD = array();

$userD = [

    'f_name' => 'd',
    'l_name' => 'd',

];

$userA =$_POST;


print_r($userA);
echo '<br>';
echo ' <br>';
print_r($user5);
echo '<br>';
echo ' <br>';


$fname = $userA["f_name"];
$lname = $userA["l_name"];
$mail = $userA["email"];
$pass = $userA["pass"];




if(isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['email']) && isset($_POST['pass'])) {

    foreach ($user5 as $key => $value) {
        foreach ($userA as $k => $v) {


            if ($user5['f_name'] == $fname) {
                echo '<br>';
                echo ' <br>';

                echo 'YESS <br>';

                echo '<br>';
                echo ' <br>';
            } else {
                echo 'NOOOO <br>';
                dd($userA);
                dd($user5);
            }
        }
    }
}
    else
    {
        echo 'NOT ISSET <br>';
    }












