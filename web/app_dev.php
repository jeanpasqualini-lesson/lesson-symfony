<?php

require __DIR__."/../app/autoload.php";

require __DIR__."/../app/AppKernel.php";

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel("dev", true);

$kernel->loadClassCache();

$kernel->handle(Request::createFromGlobals())->send();