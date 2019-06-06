<?php

use firestark\user;
use firestark\user\manager;

class flatfileUserManager implements manager
{
    private $users = [ ];
    private $file = '';

    function __construct ( string $file, array $users )
    {
        $this->file = $file;
        $this->users = $users;
    }

    function register ( user $user )
    {        
        $this->users [ $user->credentials->username ] = $user;
        $this->write ( );
    }

    function has ( user $user ) : bool
    {
        return ( 
            isset ( $this->users [ $user->credentials->username ] ) && 
            $this->users [ $user->credentials->username ]->credentials->password === $user->credentials->password
        );
    }

    function registered ( string $username ) : bool
    {
        return isset ( $this->users [ $username ] );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->users ) );
    }
}