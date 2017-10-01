<?php

namespace Gini\Module;

class BankDBClient
{

    public static function diagnose()
    {
        $errors = [];

        $conf = \Gini\Config::get('app.rpc');
        $url = @$conf['bankdb']['url'];
        if (!$url) {
            $errors[] = '请确认app.rpc已经配置了bankdb.url';
        }

        if (!empty($errors)) {
            return $errors;
        }
    }
}
