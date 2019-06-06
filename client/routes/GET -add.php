<?php

route::get ( '/add', function ( )
{
    return view::make ( 'goals.add' );
} );