<?php

status::matching ( 1005, function ( )
{
    session::flash ( 'message', 'Habit removed.' );
    return redirect::back ( );
} );