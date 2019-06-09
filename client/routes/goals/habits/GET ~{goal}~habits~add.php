<?php

use function compact as with;

route::get ( '/{goal}/habits/add', function ( $goalid )
{
    return view::make ( 'goals.habits.add', with ( 'goalid' ) );
} );