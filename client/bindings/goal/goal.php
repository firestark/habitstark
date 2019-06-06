<?php

use goal\manager;

app::bind ( goal::class, function ( $app )
{
    if ( $app [ manager::class ]->has ( input::get ( 'goal', '' ) ) )
        return $app [ manager::class ]->find ( input::get ( 'goal', '' ) );

    return new goal (
        input::get ( 'id', uniqid ( ) ),
        input::get ( 'description', '' ),
        time ( )
    );
} );