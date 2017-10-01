<?php

namespace Gini;

class BankDB
{
    public static function getRPC()
    {
        return \Gini\RPC::of('bankdb');
    }

    public static function getBranch($name)
    {
        return self::getRPC()->BankDB->getBranch($name);
    }

    public static function getBranches($criteria) {
        return self::getRPC()->BankDB->getBranches($criteria);
    }
    
}
