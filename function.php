<?php
function isValidEmail($string)
{
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

    if (preg_match_all($regexp, $string)) {
        echo "VALID EMAIL";
    } else {
        echo "INVALID EMAIL";
    }
}

function isValidAccount($string)
{
    $regexp = '/^[_a-z0-9]{6,}$/';

    if (preg_match($regexp, $string)) {
        echo "VALID ACCOUNT";
    } else {
        echo "INVALID ACCOUNT";
    }
}
