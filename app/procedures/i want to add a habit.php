<?php

when ( 'i want to add a habit', then ( apply ( a ( 
    
function ( goal $goal, goal\habit $habit, goal\manager $manager )
{
    $goal->add ( $habit );
    $manager->update ( $goal );

    return [ 1004, [ 'goalid' => $goal->id ] ];
} ) ) ) );