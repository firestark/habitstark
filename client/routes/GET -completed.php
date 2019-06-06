<?php

route::get ( '/completed', function ( )
{
    return app::fulfill ( 'i want to see my completed todo\'s' );
} );