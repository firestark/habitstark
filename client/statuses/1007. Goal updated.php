<?php

status::matching ( 1007, function ( )
{
    session::flash ( 'message', 'Goal updated.' );
    return redirect::back ( );
} );