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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="p-5">
    <? echo "<h1>" . randomPassword() . "</h1>"; ?> <br>
    <button onclick='window.location.reload(true);'>Genera nuova password</button>
    <br>
    <a href="form.php">Imposta nuova password</a>
</body>

</html>