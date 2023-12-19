<?php
function randomPassword()
{
    $password = $_GET["password"];
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!.,$%&/()&/';
    $pass = array();
    $charactersLength = strlen($characters) - 1;
    for ($i = 0; $i < $password; $i++) {
        $letters = rand(1, $charactersLength);
        $pass[] = $characters[$letters];
    }
    return implode($pass);
}
