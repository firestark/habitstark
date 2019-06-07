<?php

class goal
{
    public $id = null;
    public $description = '';
    public $createdAt = 0;
    public $habits = [ ];

    function __construct ( $id, string $description, int $createdAt, array $habits = [ ] )
    {
        $this->id = $id;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->habits = $habits;
    }

    function add ( goal\habit $habit )
    {
        $this->habits [ ] = $habit;
    }
}