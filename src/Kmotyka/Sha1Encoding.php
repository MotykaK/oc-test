<?php
/**
 * This file is part of the "PasswordEncoder" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace Kmotyka;


use Jkan\Component\Password\EncodingMethod;

class Sha1Encoding implements EncodingMethod
{

    public function encode($plainText)
    {
        return sha1($plainText);
    }
}