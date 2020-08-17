<?php

namespace Shop;

class Worker
{
    public $name;
    public $sex;
    public $age;

    public function __construct($name, $sex , $age)
    {
        $this->name =$name;
        $this->sex = $sex;
        $this->age = $age;

    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSex()
    {
        return $this->sex;
    }

}

$p1 = new Worker("daniel", "male", "32");
echo $p1->getName();
echo $p1->getSex();
echo $p1->getAge();
