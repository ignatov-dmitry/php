<?php


namespace App\Actions;

use App\Actions\Interfaces\IWeapon;

class Hand implements IWeapon
{

    public function hit(): string
    {
        return 'Крадем стиральную машину' . PHP_EOL;
    }
}
