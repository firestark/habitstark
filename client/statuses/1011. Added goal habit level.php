<?php

use function compact as with;

status::matching ( 1011, function ( $goalid, $habitid )
{
   return redirect::to ( '/' . $goalid . '/habits/' . $habitid . '/levels' );
} );