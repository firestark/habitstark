<?php

when ( 'i want to remove a habit', then ( apply ( a ( 
    
function ( goal $goal, goal\habit $habit, goal\manager $manager )
{
    $goal->remove ( $habit );
    $manager->update ( $goal );
    return [ 1005, [ 'goalid' => $goal->id ] ];
} ) ) ) );