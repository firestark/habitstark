<?php

when ( 'i want to remove a habit\'s level', then ( apply ( a ( 
    
function ( int $number, goal\habit $habit, goal $goal, goal\manager $manager )
{
    $goal->habits [ $habit->id ]->remove ( $number );
    $manager->update ( $goal );

    return [ 1012, [ 'goalid' => $goal->id, 'habit' => $habit->id ] ];
} ) ) ) );