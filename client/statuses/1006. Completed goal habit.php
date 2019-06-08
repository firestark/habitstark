<?php

status::matching ( 1006, function ( )
{
    session::flash ( 'message', 'Habit completed.' );
    return redirect::back ( );
} );