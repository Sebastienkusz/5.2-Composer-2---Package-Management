<?php

namespace App\Wcs ;

use HelloWorld\SayHello;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';

$hello = new Hello() ;
echo $hello->talk();
echo '<br>';

$sayHello = new SayHello() ;
echo $sayHello->world();
