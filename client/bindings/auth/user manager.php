<?php

use firestark\user\manager;

app::share ( manager::class, function ( $app )
{
    return new flatfileUserManager (
        $app [ 'users file' ],
        $app [ 'users' ] );
} );