<?php
date_default_timezone_set("Asia/Jakarta");

require __DIR__.'/src/autoload.php';
require __DIR__.'/src/dotenv.php';
load_dotenv(__DIR__);

use util\DailyFileLogger;

$appName = getenv('APP_NAME');
$logger = new DailyFileLogger(__DIR__.DIRECTORY_SEPARATOR.'logs/app.log');
$logger->save("$appName: Hello World!");

?>