<?php

route::get ( '/{goal}/habits/{habitid}/complete', function ( )
{
    return app::fulfill ( 'i want to complete a habit' );
} );