# Objetivo
Criado para facilitar a validação de dados

# Requisitos
PHP: Versão 7 ou acima | oizumi-junho/validar-dados-php: Qualquer versão

# Configuração do arquivo composer.json

```

    "require": {
        "oizumi-junho/validar-dados-php": "dev-master",
        "php": ">=7.0"
    }

```

# Exemplo de uso

```

<?php

require __DIR__ . "/vendor/autoload.php";

use OizumiJunho\ValidarDados\ValidarDados;

echo ValidarDados::ValidarDataAAAAMMDD("2021-01-12");
echo ValidarDados::ValidarDataDDMMAAAA("12/10/2021");
echo ValidarDados::ValidarDataAAAAMMDDHHMMSS("12/10/2021 07:05:12");

```