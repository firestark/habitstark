<?php

when ( 'i want to complete a habit', then ( apply ( a ( 
    
function ( goal $goal, goal\habit $habit, goal\manager $manager )
{
    $goal->habits [ $habit->id ]->complete ( );
    $manager->update ( $goal );
    return [ 1006, [ ] ];
} ) ) ) );