<?php

use function compact as with;

status::matching ( 1010, function ( $goalid, goal\habit $habit )
{
   return view::make ( 'goals.habits.levels.list', with ( 'goalid', 'habit' ) );
} );