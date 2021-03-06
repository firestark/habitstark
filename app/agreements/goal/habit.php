<?php

namespace goal;

use goal\habit\level;

class habit
{
    public $id = null;
    public $title = '';
    public $createdAt = 0;
    public $levels = [ ];
    public $level = 0;
    public $completions = [ ];

    function __construct ( $id, string $title, int $createdAt, array $levels = [ ], int $level = 0, array $completions = [ ] )
    {
        $this->id = $id;
        $this->title = $title;
        $this->createdAt = $createdAt;
        $this->levels = $levels;
        $this->completions = $completions;
    }

    function level ( ) : int
    {
        return $this->level + 1;
    }

    function levelup ( )
    {
        $this->level++;
    }

    function add ( level $level )
    {
        $this->levels [ ] = $level;
    }

    function remove ( int $number )
    {
        unset ( $this->levels [ $number ] );
        $this->levels = array_values ( $this->levels );
        
        if ( $number <= $this->level )
            $this->level = 0;
    }

    function update ( level $level, int $number )
    {
        $this->levels [ $number ] = $level;
    }

    function complete ( )
    {
        $this->completions [ ] = time ( );
    }

    function uncomplete ( )
    {
        array_pop ( $this->completions );
    }

    function isCompleted ( ) : bool
    {
        return end ( $this->completions ) >= beginOfDay ( time ( ) );
    }
}