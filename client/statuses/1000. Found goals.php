<?php

use function compact as with;

status::matching ( 1000, function ( array $goals )
{
    return view::make ( 'goals.list', with ( 'goals' ) );
} );