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
        return self::getRPC()->Bank->getBranch($name);
    }

    public static function getBranches($criteria) {
        return self::getRPC()->Bank->getBranches($criteria);
    }
    
}
