<?php

status::matching ( 1008, function ( )
{
    session::flash ( 'message', 'Goal removed.' );
    return redirect::to ( '/' );
} );