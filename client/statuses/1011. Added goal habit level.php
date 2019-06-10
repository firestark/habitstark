<?php

use function compact as with;

status::matching ( 1011, function ( $goalid, $habitid )
{
   session::flash ( 'message', 'Habit level added.' );
   return redirect::to ( '/' . $goalid . '/habits/' . $habitid . '/levels' );
} );