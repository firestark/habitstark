<?php

route::get ( '/{goal}/habits/{habitid}/uncomplete', function ( )
{
    return app::fulfill ( 'i want to uncomplete a habit' );
} );