<?php

when ( 'i want to levelup a habit', then ( apply ( a ( 
    
function ( goal\habit $habit, goal $goal, goal\manager $manager )
{
    $goal->habits [ $habit->id ]->levelup ( );
    $manager->update ( $goal );

    return [ 1016, [ ] ];
} ) ) ) );