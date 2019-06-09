<?php

when ( 'i want to see a habit\'s levels', then ( apply ( a ( 
    
function ( goal $goal, goal\habit $habit )
{
    return [ 1010, [ 'goalid' => $goal->id, 'habit' => $goal->habits [ $habit->id ] ] ];
} ) ) ) );