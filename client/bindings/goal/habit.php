<?php

app::bind ( goal\habit::class, function ( $app )
{
    return new goal\habit (
        input::get ( 'habitid', uniqid ( ) ),
        input::get ( 'title', '' ),
        time ( )
    );
} );