<?php

app::bind ( goal\habit::class, function ( $app )
{
    return new goal\habit (
        input::get ( 'id', uniqid ( ) ),
        input::get ( 'description', '' ),
        time ( )
    );
} );