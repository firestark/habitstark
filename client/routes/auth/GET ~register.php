<?php

route::get ( '/register', function ( )
{
    return view::make ( 'login-register' );
} );