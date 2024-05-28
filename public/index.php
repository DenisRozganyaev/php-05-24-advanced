<?php

use App\Enums\Http\Status;

define('BASE_DIR', dirname(__DIR__));

require_once BASE_DIR . '/vendor/autoload.php';

echo jsonResponse(Status::METHOD_NOT_ALLOWED, ['message' => 'This method is not allowed']);
exit;
