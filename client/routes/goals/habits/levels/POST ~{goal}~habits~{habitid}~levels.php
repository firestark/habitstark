<?php

route::post ( '/{goal}/habits/{habitid}/levels', function ( )
{
    return app::fulfill ( 'i want to add a habit level' );
} );