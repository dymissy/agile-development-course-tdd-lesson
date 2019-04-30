<pre><?php

$loader = require_once __DIR__ . '/app/autoload.php';
$testsDir = 'test';

$_SERVER['argv'] = [
    1 => $testsDir
];

PHPUnit_TextUI_Command::main();
