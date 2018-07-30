<?php

require __DIR__.'/RequestInterface.php';
require __DIR__.'/Http/Request.php';
require __DIR__.'/Api/Request.php';

use Http\Request as HttpRequest;
use Api\Request as ApiRequest;

$request = new HttpRequest();
$request->handle();
echo PHP_EOL;

$request = new ApiRequest();
$request->handle();
echo PHP_EOL;






 ?>
