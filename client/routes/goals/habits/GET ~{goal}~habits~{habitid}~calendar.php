<?php

route::get ( '/{goal}/habits/{habitid}/calendar', function ( $goal, $habitid )
{

    $start = date ( 'N', mktime ( 0, 0, 0, date ( 'm' ), 1 ) );

    for ( $i = 1; $i < $start; $i++ ) 
        $days [ ] = '';

    for ( $i = 1; $i <= date ( 't' ); $i++ ) 
        $days [ ] = $i;

    $weeks = array_chunk ( $days , 7 );
    $today = ( ( int ) date ( 'd' ) );

    return view::make ( 'goals.habits.calendar', [ 'goalid' => $goal, 'habitid' => $habitid, 'weeks' => $weeks, 'today' => $today ] );
} );