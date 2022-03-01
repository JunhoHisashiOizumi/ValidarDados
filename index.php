<?php

require __DIR__ . "/vendor/autoload.php";

use OizumiJunho\ValidarDados\ValidarDados;

echo ValidarDados::ValidarDataAAAAMMDD("2021-01-12");
echo ValidarDados::ValidarDataDDMMAAAA("12/10/2021");
echo ValidarDados::ValidarDataAAAAMMDDHHMMSS("12/10/2021 07:05:12");