<?php
date_default_timezone_set("Asia/Jakarta");

require __DIR__.'/src/autoload.php';

use util\DailyFileLogger;

$logger = new DailyFileLogger(__DIR__.DIRECTORY_SEPARATOR.'logs/app.log');
$logger->save("Hello World!");

?>