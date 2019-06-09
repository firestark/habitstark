<?php

route::get ( '/{goal}/habits/{habitid}/levels', function ( )
{
    return app::fulfill ( 'i want to see a habit\'s levels' );
} );