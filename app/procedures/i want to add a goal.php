<?php

when ( 'i want to add a goal', then ( apply ( a ( 
    
function ( goal $goal, goal\manager $manager )
{
    if ( $manager->has ( $goal ) )
        return [ 2000, [ ] ];

    $manager->add ( $goal );
    return [ 1001, [ ] ];
} ) ) ) );