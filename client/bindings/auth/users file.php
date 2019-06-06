<?php

app::share ( 'users file', function ( $app )
{
	return __DIR__ . '/../../storage/db/files/users.data';
} );
