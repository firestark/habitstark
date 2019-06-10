<?php

use function compact as with;

route::get ( '/{goal}/habits/{habitid}/levels/{number}', function ( $goal, $habitid, int $number )
{
    return app::fulfill ( 'i want to see a habit\'s level', with ( 'number' ) );
} );