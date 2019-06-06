<?php

use function compact as with;

status::matching ( 1002, function ( goal $goal )
{
    return view::make ( 'goals.edit', with ( 'goal' ) );
} );