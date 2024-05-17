<?php
require_once __DIR__ . '/vendor/autoload.php';

<<<<<<< Updated upstream
require_once __DIR__ . '/scripts/function.php';
require_once __DIR__ . '/info.php';
=======
class MyOwnException extends Exception
{}

try {
    //...

    if (true) {
        throw new Exception('asfsfssf');
    }

} catch (Throwable $e) {
    logs()->warning($e->getMessage());
}
>>>>>>> Stashed changes
