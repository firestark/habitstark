<?php

when ( 'i want to see my completed todo\'s', then ( apply ( a ( 
    
function ( todo\manager $manager )
{
    return [ 1005, [ 'todos' => $manager->completed ( ) ] ];
} ) ) ) );