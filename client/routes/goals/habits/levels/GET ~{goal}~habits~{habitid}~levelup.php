<?php

route::get ( '/{goal}/habits/{habitid}/levelup', function ( )
{
    return app::fulfill ( 'i want to levelup a habit' );
} );