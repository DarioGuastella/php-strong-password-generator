<?php
function randomPassword()
{
    $password = $_GET["password"];
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!.,$%&/()&/';
    $pass = array();
    $charactersLength = strlen($characters) - 1;
    for ($i = 0; $i < $password; $i++) {
        $character = rand(1, $charactersLength);
        $pass[] = $characters[$character];
    }
    return implode($pass);
}
// function randomPassword()
// {
//     $password = $_GET["password"];
//     $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $numbers = '1234567890';
//     $symbols = '!.,$%&/()&/';
//     $pass = array();
//     $alphabetLength = strlen($alphabet) - 1;
//     $numbersLength = strlen($numbers) - 1;
//     $symbolsLength = strlen($symbols) - 1;
//     for ($i = 0; $i < $password / 3; $i++) {
//         $letters = rand(1, $alphabetLength);
//         $ranNumbers = rand(1, $numbersLength);
//         $ranSymbols = rand(1, $symbolsLength);
//         $pass[] = $alphabet[$letters] . $numbers[$ranNumbers] . $symbols[$ranSymbols];
//     }
//     return implode($pass);
// }
