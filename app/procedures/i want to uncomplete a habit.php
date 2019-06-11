<?php

when ( 'i want to uncomplete a habit', then ( apply ( a ( 
    
function ( goal $goal, goal\habit $habit, goal\manager $manager )
{
    $goal->habits [ $habit->id ]->uncomplete ( );
    $manager->update ( $goal );
    return [ 1015, [ ] ];
} ) ) ) );