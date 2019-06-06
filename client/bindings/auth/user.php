<?php

use firestark\user;
use firestark\user\credentials;

app::bind ( user::class, function ( $app )
{
    return new user ( $app [ credentials::class ], '' );
} );