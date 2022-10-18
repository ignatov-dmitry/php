<?php


namespace App\Actions;

use App\Actions\Interfaces\IBriefing;

class NoLosses implements IBriefing
{

    public function getBriefing(string $date): string
    {
        return 'По состоянию на ' . $date . '. Потери наших войск отсутсвуют. Так же нашими войсками, было уничтожено 10 000 систем HIMARS, 20 000 артиллерийских установок M777 и 200 000 000 неонацистов' . PHP_EOL;
    }
}
