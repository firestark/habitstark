<?php

app::bind ( goal::class, function ( $app )
{
    return new goal (
        input::get ( 'id', uniqid ( ) ),
        input::get ( 'description', '' ),
        time ( ),
        [ ]
    );
} );