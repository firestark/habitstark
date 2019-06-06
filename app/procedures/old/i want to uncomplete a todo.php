<?php

when ( 'i want to uncomplete a todo', then ( apply ( a ( 
    
function ( todo $todo, todo\manager $manager )
{
    if ( ! $manager->has ( $todo ) )
        return [ 2001, [ ] ];

    $manager->uncomplete ( $todo );
    return [ 1006, [ ] ];
} ) ) ) );