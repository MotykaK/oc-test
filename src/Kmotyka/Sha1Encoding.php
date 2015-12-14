<?php
/**
 * This file is part of the "PasswordEncoder" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace src\Kmotyka;


use Jkan\Component\Password\EncodingMethod;

class Sh1Encoding implements EncodingMethod
{

    public function encode($plainText)
    {
        return sh1($plainText);
    }
}