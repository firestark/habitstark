<?php

route::get ( '/{goal}/habits/{habitit}/complete', function ( )
{
    return app::fulfill ( 'i want to complete a habit' );
} );