<?php

app::bind ( todo\manager::class, function ( $app )
{
    return new flatfileTodoManager ( 
        $app [ 'todos file' ],
        $app [ 'todos' ]
    );
} );