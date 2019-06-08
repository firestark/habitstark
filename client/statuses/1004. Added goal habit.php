<?php

status::matching ( 1004, function ( $goalid )
{
    session::flash ( 'message', 'Habit added.' );
    return redirect::to ( '/' . $goalid . '/habits' );
} );