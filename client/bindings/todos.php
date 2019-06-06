<?php

app::share ( 'todos', function ( $app )
{
	$todos = unserialize ( file_get_contents ( $app [ 'todos file' ] ) );

	if ( ! is_array ( $todos ) )
		$todos = [ ];

	return $todos;
} );
