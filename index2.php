
<?php

namespace Benz\type;

use Benz\Car;

class Benz extends Car
{
    //inherit all properties and methods of car since they are the same things i want to use

}

$m1 = new Benz("2019","cls","3000");
echo $m1->getBrand();