# DHL Track and Trace Client

## Generate PHP classes from WSDL
To generate PHP classes from DHL WSDL file we used wsdl2phpgenerator package:
`https://github.com/wsdl2phpgenerator/wsdl2phpgenerator` 

Code to generate classes:
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$generator = new Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config([
        'inputFile' => 'https://ecom.dhl.com.pl/app/tntwebservice/securetntwebservice_v2.wsdl',
        'outputDir' => 'src/Model',
        'namespaceName' => 'DHLTrackAndTraceClient\Model',
    ])
);
```
