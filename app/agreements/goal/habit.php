<?php

namespace goal;

class habit
{
    public $id = null;
    public $description = '';
    public $createdAt = 0;
    public $completions = [ ];

    function __construct ( $id, string $description, int $createdAt, array $completions = [ ] )
    {
        $this->id = $id;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->completions = $completions;
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