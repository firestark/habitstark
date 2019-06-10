<?php

when ( 'i want to see a habit\'s level', then ( apply ( a ( 
    
function ( int $number, goal\habit $habit, goal $goal )
{
    $level = $goal->habits [ $habit->id ]->levels [ $number ];
    return [ 1013, [ 'goalid' => $goal->id, 'habitid' => $habit->id, 'level' => $level ] ];
} ) ) ) );