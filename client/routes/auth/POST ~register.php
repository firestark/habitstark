<?php

use firestark\user;
use firestark\user\credentials;
use firestark\user\manager;

route::post ( '/register', function ( )
{
    $user = app::make ( user::class );
    $userManager = app::make ( manager::class );

    if ( $userManager->registered ( $user->credentials->username ) )
    {
        session::flash ( 'message', 'Username already exists.' );
        return redirect::back ( );
    }

    $userManager->register ( $user );
    createfiles ( $user->credentials );

    guard::stamp ( $user->credentials );
    return redirect::to ( '/' );
} );


function createFiles ( credentials $credentials )
{
    $path = __DIR__ . '/../../storage/db/files/' . md5 ( $credentials->username );

    $files = [
        $path . '/goals.data'
    ];
    
    if ( ! file_exists ( $path ) )
        mkdir ( $path, 0777, true );
    
    foreach ( $files as $file )
        if ( ! file_exists ( $file ) )
            fopen ( $file, 'w' );
}