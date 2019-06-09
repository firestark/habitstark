<?php

namespace goal;

use goal\habit\level;

class habit
{
    public $id = null;
    public $title = '';
    public $createdAt = 0;
    public $levels = [ ];
    public $completions = [ ];

    function __construct ( $id, string $title, int $createdAt, array $levels = [ ], array $completions = [ ] )
    {
        $this->id = $id;
        $this->title = $title;
        $this->createdAt = $createdAt;
        $this->levels = $levels;
        $this->completions = $completions;
    }

    function add ( level $level )
    {
        $this->levels [ ] = $level;
    }

    function remove ( int $number )
    {
        unset ( $this->levels [ $number ] );
        $this->levels = array_values ( $this->levels );
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