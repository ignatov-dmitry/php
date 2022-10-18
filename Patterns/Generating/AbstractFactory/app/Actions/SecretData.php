<?php


namespace App\Actions;

use App\Actions\Interfaces\Briefing;

class SecretData implements Briefing
{

    public function getBriefing(string $date): string
    {
        return 'Данные засекречены' . PHP_EOL;
    }
}
