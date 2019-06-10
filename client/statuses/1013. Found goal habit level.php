<?php

use function compact as with;

status::matching ( 1013, function ( $goalid, $habitid, goal\habit\level $level )
{
   return view::make ( 'goals.habits.levels.edit', with ( 'goalid', 'habitid', 'level' ) );
} );