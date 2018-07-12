<?php
require "vendor/autoload.php";
require "lib.php";
// 定义参数
define('ACCOUNT_ID', ''); // 你的账户ID 
define('ACCESS_KEY','00000000-00000000-00000000-00000000'); // 你的ACCESS_KEY
define('SECRET_KEY', '00000000-00000000-00000000-00000000'); // 你的SECRET_KEY
define('PRIVATE_KEY', "-----BEGIN EC PRIVATE KEY-----
MHQCAQEEIJxC7lk2nTcVUj+Dh3iIelrGIFwt/lPwJYcUsX10fkr9oAcGBSuBBAAK
oUQDQgAEJYDjtP9s7i1FU0Gp3xXq0KQptrtxy63bb3TwlTo49GyasdhZYPF1HILk
TskvXRsWal24HAelzpJWnFzXwZnRpw==
-----END EC PRIVATE KEY-----"); // 你的privatekey数据


//实例化类库
$req = new req();
// 获取账户余额示例
var_dump($req->get_account_accounts());

?>