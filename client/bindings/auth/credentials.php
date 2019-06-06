<?php

use firestark\user\credentials;

app::bind ( credentials::class, function ( $app ) : credentials
{
    if ( guard::stamped ( ) )
        return guard::current ( );

    return new credentials (
        input::get ( 'username', '' ),
        input::get ( 'password', '' )
    );
} );
