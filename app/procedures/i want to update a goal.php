<?php

when ( 'i want to update a goal', then ( apply ( a ( 
    
function ( goal $goal, goal\manager $manager )
{
    $manager->update ( $goal );
    return [ 1007, [ ] ];
} ) ) ) );