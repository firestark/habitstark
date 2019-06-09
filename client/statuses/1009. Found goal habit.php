<?php

use function compact as with;

status::matching ( 1009, function ( $goalid, goal\habit $habit )
{
   return view::make ( 'goals.habits.edit', with ( 'goalid', 'habit' ) );
} );