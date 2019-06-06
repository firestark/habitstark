<?php

route::get ( '/settings', function ( )
{
    return view::make ( 'settings' );
} );