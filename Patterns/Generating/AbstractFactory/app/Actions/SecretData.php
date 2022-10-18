<?php


namespace App\Actions;

use App\Actions\Interfaces\IBriefing;

class SecretData implements IBriefing
{

    public function getBriefing(string $date): string
    {
        return 'Данные засекречены' . PHP_EOL;
    }
}
