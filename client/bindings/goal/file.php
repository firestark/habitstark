<?php

use firestark\user\credentials;

app::share ( 'goals file', function ( $app )
{
    $directory = __DIR__ . '/../../storage/db/files/' . md5 ( $app [ credentials::class ]->username );
    $file = 'goals.data';
    return $directory . '/' . $file;
} );

