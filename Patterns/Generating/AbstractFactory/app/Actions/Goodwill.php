<?php


namespace App\Actions;

use App\Actions\Interfaces\Movement;

class Goodwill implements Movement
{

    public function move(): string
    {
        return 'Делаем шаг доброй воли и отступаем на более выгодные позиции, для последующей перегруппировки' . PHP_EOL;
    }
}
