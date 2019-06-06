<?php

status::matching ( 2000, function ( )
{
    session::flash ( 'message', 'Goal already exists.' );
    return redirect::to ( '/' ); 
} );