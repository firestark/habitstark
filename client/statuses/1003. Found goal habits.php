<?php

use function compact as with;

status::matching ( 1003, function ( $goalid, array $habits )
{
    return view::make ( 'goals.habits.list', with ( 'goalid', 'habits' ) );
} );