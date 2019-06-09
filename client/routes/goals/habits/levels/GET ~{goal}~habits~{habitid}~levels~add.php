<?php

use function compact as with;

route::get ( '/{goal}/habits/{habitid}/levels/add', function ( $goalid, $habitid )
{
    return view::make ( 'goals.habits.levels.add', with ( 'goalid', 'habitid' ) );
} );