<?php

class flatfileGoalManager implements goal\manager
{
    private $goals = [ ];
    private $file = '';

    function __construct ( string $file, array $goals )
    {
        $this->file = $file;
        $this->goals = $goals;
    }

    function add ( goal $goal )
    {
        $this->goals [ $goal->id ] = $goal;
        $this->write ( );
    }

    function update ( goal $goal )
    {
        $this->goals [ $goal->id ] = $goal;
        $this->write ( );
    }

    function has ( $id ) : bool
    {
        return isset ( $this->goals [ $id ] );
    }

    function all ( ) : array
    {
        return $this->goals;
    }

    function find ( $id ) : goal
    {
        return $this->goals [ $id ];
    }

    function remove ( goal $goal )
    {
        unset ( $this->goals [ $goal->id ] );
        $this->write ( );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->goals ) );
    }
}