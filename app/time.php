<?php

function endOfDay ( int $timestamp ) : int
{
    $beginOfDay = strtotime ( 'midnight', $timestamp );
    return strtotime ( 'tomorrow', $beginOfDay ) - 1;
}

function beginOfDay ( int $timestamp ) : int
{
    return strtotime ( 'midnight', $timestamp );
}

function endOfMonth ( ) : int
{
    return strtotime ( 'last day of ' . date ( 'F Y' ) );
}

function beginOfMonth ( ) : int
{
    return strtotime ( 'first day of ' . date ( 'F Y' ) );
}