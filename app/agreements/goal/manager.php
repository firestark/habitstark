<?php

namespace goal;

use goal;

interface manager
{
    function has ( $id ) : bool;
    
    function add ( goal $goal );

    function update ( goal $goal );

    function all ( ) : array;

    function find ( $id ) : goal;

    function remove ( goal $goal );
}