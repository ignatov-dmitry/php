<?php


namespace App\Actions;

use App\Actions\Interfaces\Weapon;

class HIMARS implements Weapon
{

    public function hit(): string
    {
        return 'Уничтожаем склады боеприпасов' . PHP_EOL;
    }
}
