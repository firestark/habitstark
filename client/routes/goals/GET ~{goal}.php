<?php

route::get ( '/{goal}', function ( )
{
    return app::fulfill ( 'i want to see a goal' );
} );