<?php
function load_dotenv($path)
{
    $lines = file($path . '/.env');
    foreach ($lines as $line) {
        $params = explode('=', $line, 2);
        $key = trim($params[0]);
        $value = trim($params[1]);
        putenv(sprintf('%s=%s', $key, $value));
        $_ENV[$key] = $value;
    }
}