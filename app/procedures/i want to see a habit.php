<?php

when ( 'i want to see a habit', then ( apply ( a ( 
    
function ( goal $goal, goal\habit $habit )
{
    return [ 1009, [ 'goalid' => $goal->id, 'habit' => $goal->habits [ $habit->id ] ] ];
} ) ) ) );