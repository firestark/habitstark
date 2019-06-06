<?php

namespace firestark;

use firestark\user\credentials;

class user
{
    public $credentials = null;
    public $avatar = '';

    function __construct ( credentials $credentials, string $avatar )
    {
        $this->credentials = $credentials;
        $this->avatar = $avatar;
    }
}