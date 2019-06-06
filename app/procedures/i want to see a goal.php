<?php

use function compact as with;

when ( 'i want to see a goal', then ( apply ( a ( 
    
function ( goal $goal )
{
    return [ 1002, with ( 'goal' ) ];
} ) ) ) );