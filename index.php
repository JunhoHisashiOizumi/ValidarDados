<?php

require __DIR__ . "/vendor/autoload.php";

use OizumiJunho\ValidarDados\ValidarDados;

echo ValidarDados::ValidaIP("192.168.1.300");
