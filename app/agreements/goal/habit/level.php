<?php

namespace goal\habit;

class level
{
    public $id = null;
    public $description = '';

    function __construct ( $id, string $description )
    {
        $this->id = $id;
        $this->description = $description;
    }
}