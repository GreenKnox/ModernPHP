<?php

namespace Benz;

class Car
{
    public $year;
    public $model;
    public $mileage;

    public function __construct($year, $model, $mileage)
    {
        $this->year = $year;
        $this->model = $model;
        $this->mileage = $mileage;
    }

    Public function getYear()
    {
        return $this->year;
    }

    Public function getModel()
    {
        return $this->model;
    }

    Public function getMileage()
    {
        return $this->mileage
    }

}