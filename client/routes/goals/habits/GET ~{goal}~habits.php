<?php

route::get ( '/{goal}/habits', function ( )
{
    return app::fulfill ( 'i want to see a goal\'s habits' );
} );