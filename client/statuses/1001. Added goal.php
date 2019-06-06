<?php

status::matching ( 1001, function ( )
{
    session::flash ( 'message', 'Goal added.' );
    return redirect::to ( '/' );
} );