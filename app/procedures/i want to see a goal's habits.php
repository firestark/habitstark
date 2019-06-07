<?php

when ( 'i want to see a goal\'s habits', then ( apply ( a ( 
    
function ( goal $goal )
{
    return [ 1003, [ 'goalid' => $goal->id, 'habits' => $goal->habits ] ];
} ) ) ) );