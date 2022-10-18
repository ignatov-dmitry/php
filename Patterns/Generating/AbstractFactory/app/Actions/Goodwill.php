<?php


namespace App\Actions;

use App\Actions\Interfaces\IMovement;

class Goodwill implements IMovement
{

    public function move(): string
    {
        return 'Делаем шаг доброй воли и отступаем на более выгодные позиции, для последующей перегруппировки' . PHP_EOL;
    }
}
