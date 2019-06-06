<?php

use firestark\user\credentials;

app::share ( 'todos file', function ( $app )
{
    $directory = __DIR__ . '/../storage/db/files/' . md5 ( $app [ credentials::class ]->username );
    $file = 'todos.data';
    return $directory . '/' . $file;
} );

