<?php

use firestark\guard as g;

class guard extends facade
{
    public static function getFacadeAccessor ( )
    {
        return g::class;
    }
}
