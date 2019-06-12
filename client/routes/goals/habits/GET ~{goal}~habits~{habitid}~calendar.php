<?php

route::get ( '/{goal}/habits/{habitid}/calendar', function ( $goal, $habitid )
{
    $habit = app::make ( goal\manager::class )->find ( $goal )->habits [ $habitid ];
    $filtered = filter ( $habit->completions, beginOfMonth ( ), endOfMonth ( ) );


    foreach ( $filtered as $time )
        $completedDays [ ] = date ( 'd', $time );
   
    $start = date ( 'N', mktime ( 0, 0, 0, date ( 'm' ), 1 ) );

    for ( $i = 1; $i < $start; $i++ ) 
        $days [ ] = '';

    for ( $i = 1; $i <= date ( 't' ); $i++ ) 
        $days [ ] = $i;

    $weeks = array_chunk ( $days , 7 );
    $today = ( ( int ) date ( 'd' ) );

    return view::make ( 'goals.habits.calendar', [ 'goalid' => $goal, 'habitid' => $habitid, 'weeks' => $weeks, 'today' => $today, 'completedDays' => $completedDays ?? [ ] ] );
} );


function filter ( array $completions, int $begin, int $end ) : array
{
    foreach ( $completions as $completion )
        if ( $completion >= $begin and $completion <= $end )
            $filtered [ ] = $completion;
    
    return $filtered ?? [ ];
}