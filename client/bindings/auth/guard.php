<?php

use firestark\guard;

app::share ( guard::class, function ( $app ) : guard
{
    return new jwtSessionGuard (
        $app [ 'session' ] 
    );
} );