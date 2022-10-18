<?php


namespace App\Actions;

use App\Actions\Interfaces\IMovement;

class Offensive implements IMovement
{

    public function move(): string
    {
        return 'Гоним орков обратно в мордор' . PHP_EOL;
    }
}
