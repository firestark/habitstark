<?php

use function compact as with;

route::post ( '/{goal}/habits', function ( $goalid )
{
    return app::fulfill ( 'i want to add a habit' );
} );