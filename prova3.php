<?php

$email_first = 'brandonsoto19@gmail.com';
$email_second ='firstlast@11gmail,com';
function validateEmail($email) {
    $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
    echo preg_match($regex, $email) ? "The email is valid"."<br>" :"The email is       not valid";
}
validateEmail($email_first);
validateEmail($email_second);

?>
