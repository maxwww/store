<?php

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/msf/framework/Msf.php');

$config = require(__DIR__ . '/../config/web.php');
$a = new Msf();
$b = new app\controllers\Site();
$c = new msf\BaseMsf();

debug($a);
debug($b);
debug($c);

function debug($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}
