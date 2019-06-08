<?php

use goal\manager;

app::bind ( goal::class, function ( $app )
{
    if ( $app [ manager::class ]->hasId ( input::get ( 'goal', '' ) ) )
        return $app [ manager::class ]->find ( input::get ( 'goal', '' ) );

    if ( input::has ( 'goalid' ) )
        $habits =  $app [ manager::class ]->find ( input::get ( 'goalid' ) )->habits;

    return new goal (
        input::get ( 'goalid', uniqid ( ) ),
        input::get ( 'description', '' ),
        time ( ),
        $habits ?? [ ]
    );
} );