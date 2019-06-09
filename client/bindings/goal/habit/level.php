<?php

use goal\habit\level;

app::bind ( level::class, function ( )
{
    return new level (
        input::get ( 'levelid', uniqid ( ) ),
        input::get ( 'description' ) 
    );
} );