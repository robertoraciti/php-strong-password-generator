<?php
function generate_psw()
{
    $possible_char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';

    $password = [];

    $numb_of_char = (int) $_GET['char'];

    $comb_char = strlen($possible_char) - 1;

    for ($i = 0; $i < $numb_of_char; $i++) {
        $random_psw = rand(0, $comb_char);
        $password[] = $possible_char[$random_psw];
    }

    return implode($password);
}