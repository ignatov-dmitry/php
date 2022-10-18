<?php


namespace App\Actions;

use App\Actions\Interfaces\Weapon;

class Hand implements Weapon
{

    public function hit(): string
    {
        return 'Крадем стиральную машину' . PHP_EOL;
    }
}
