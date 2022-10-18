<?php


namespace App\Actions;

use App\Actions\Interfaces\IWeapon;

class HIMARS implements IWeapon
{

    public function hit(): string
    {
        return 'Уничтожаем склады боеприпасов' . PHP_EOL;
    }
}
