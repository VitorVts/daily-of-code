<?php

namespace App\Utils;

class ValidadorEmail
{
    public static function validar($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}