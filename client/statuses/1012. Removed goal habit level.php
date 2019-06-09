<?php

use function compact as with;

status::matching ( 1012, function ( $goalid, $habitid )
{
   session::flash ( 'message', 'Habit level removed.' );
   return redirect::to ( '/' . $goalid . '/habits/' . $habitid . '/levels' );
} );