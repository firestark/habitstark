<?php

route::get ( '/{id}/uncomplete', function ( )
{
    app::fulfill ( 'i want to uncomplete a todo' );
} );