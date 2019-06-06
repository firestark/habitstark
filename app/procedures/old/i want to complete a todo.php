<?php

when ( 'i want to complete a todo', then ( apply ( a ( 
    
function ( todo $todo, todo\manager $manager )
{
    if ( ! $manager->has ( $todo ) )
        return [ 2001, [ ] ];

    $manager->complete ( $todo );
    return [ 1004, [ ] ];
} ) ) ) );