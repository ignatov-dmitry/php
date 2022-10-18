<?php


namespace App\Actions;

use App\Actions\Interfaces\Movement;

class Offensive implements Movement
{

    public function move(): string
    {
        return 'Гоним орков обратно в мордор' . PHP_EOL;
    }
}
