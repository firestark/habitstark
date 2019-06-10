<?php

use function compact as with;

status::matching ( 1014, function ( $goalid, $habitid )
{
   session::flash ( 'message', 'Habit level updated.' );
   return redirect::to ( '/' . $goalid . '/habits/' . $habitid . '/levels' );
} );