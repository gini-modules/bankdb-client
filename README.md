# BankDB Client

## 函数
1. `\Gini\BankDB::getBranch($name)`
    ```php
    $branch = \Gini\BankDB::getBranch('中国工商银行天津市解放北路支行');
    ```
2. `\Gini\BankDB::getBranches($critiera, $start=0, $perPage=1000)`
    ```php
    $branches = \Gini\BankDB::getBranches('天津', 0, 20);
    $branches = \Gini\BankDB::getBranches([
        '*' => '白堤路',
        'city' => '天津市',
    ], 1, 5);
    ```
