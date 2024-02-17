<?php
function maxlen($value, $n)
{
    return strlen($value) > $n;
}

function mailCheck($mailValue)
{
    $cpt = 0;
    for ($i = 0; $i < strlen($mailValue); $i++) {
        if ($mailValue[$i] == '@') {
            $cpt += 1;
        }
    }
    return filter_var($mailValue, FILTER_VALIDATE_EMAIL) && $cpt == 1 &&
        strlen($mailValue) >= 6 && strlen($mailValue) <= 50;
}

function loginPasswordCheck($login, $password)
{
    $onlyAlpha = preg_match('/^[a-zA-Z]+$/', $login);
    return !empty($login) && !empty($password)
        && !maxlen($login, 12) && !maxlen($password, 12) && $onlyAlpha;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (loginPasswordCheck($_POST["id"], $_POST["password"]) && mailCheck($_POST["mail"])) {
        header('Location: OK.html');
        exit();
    } else {
        header('Location: index.html');
        exit();
    }
}
?>