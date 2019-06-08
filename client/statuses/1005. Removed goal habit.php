<?php

status::matching ( 1005, function ( $goalid )
{
    session::flash ( 'message', 'Habit removed.' );
    return redirect::to ( '/' . $goalid . '/habits' );
} );