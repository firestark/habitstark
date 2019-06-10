<?php

use function compact as with;

route::post ( '/{goal}/habits/{habitid}/levels/{number}', function ( $goal, $habitid, int $number )
{
    return app::fulfill ( 'i want to update a habit\'s level', with ( 'number' ) );
} );