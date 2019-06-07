<?php

namespace goal;

class habit
{
    public $id = null;
    public $description = '';
    public $createdAt = 0;

    function __construct ( $id, string $description, int $createdAt )
    {
        $this->id = $id;
        $this->description = $description;
        $this->createdAt = $createdAt;
    }
}