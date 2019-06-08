<?php

route::get ( '/{goal}/remove', function ( )
{
    return app::fulfill ( 'i want to remove a goal' );
} );