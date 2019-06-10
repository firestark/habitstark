<?php

when ( 'i want to update a habit\'s level', then ( apply ( a ( 
    
function ( int $number, goal\habit\level $level, goal\habit $habit, goal $goal, goal\manager $manager )
{
    $goal->habits [ $habit->id ]->update ( $level, $number );
    $manager->update ( $goal );
    return [ 1014, [ 'goalid' => $goal->id, 'habitid' => $habit->id ] ];
} ) ) ) );