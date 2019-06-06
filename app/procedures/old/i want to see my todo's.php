<?php

when ( 'i want to see my todo\'s', then ( apply ( a ( 
    
function ( todo\manager $manager )
{
    return [ 1001, [ 'todos' => $manager->pending ( ) ] ];
} ) ) ) );