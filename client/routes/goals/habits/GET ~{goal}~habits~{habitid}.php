<?php

route::get ( '/{goal}/habits/{habitid}', function ( )
{
    return app::fulfill ( 'i want to see a habit' );
} );