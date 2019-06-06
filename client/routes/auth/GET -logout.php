<?php

route::get ( '/logout', function ( )
{
    guard::invalidate ( );
    
    session::flash ( 'message', 'Logged out.' );
    return redirect::to ( '/login' );
} );