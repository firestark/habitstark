<?php

route::get ( '/{goal}/habits/{habitid}/remove', function ( )
{
    return app::fulfill ( 'i want to remove a habit' );
} );