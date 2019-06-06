<?php

namespace firestark\user;

use firestark\user;

interface manager
{
    function register ( user $user );

    function has ( user $user ) : bool;

    function registered ( string $username ) : bool;
}