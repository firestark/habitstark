<?php

when ( 'i want to add a habit level', then ( apply ( a ( 
    
function ( goal\habit\level $level, goal\habit $habit, goal $goal, goal\manager $manager )
{
    $goal->habits [ $habit->id ]->add ( $level );
    $manager->update ( $goal );
    return [ 1011, [ 'goalid' => $goal->id, 'habitid' => $habit->id ] ];
} ) ) ) );