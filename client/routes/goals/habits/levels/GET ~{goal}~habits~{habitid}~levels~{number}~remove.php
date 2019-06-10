<?php

use function compact as with;

route::get ( '/{goal}/habits/{habitid}/levels/{number}/remove', function ( $goal, $habitid, int $number )
{
    return app::fulfill ( 'i want to remove a habit\'s level', with ( 'number' ) );
} );