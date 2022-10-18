<?php
require __DIR__.'/vendor/autoload.php';

use App\Character;
use App\Characters\OrcCharacter;
use App\Characters\VSUCharacter;

$orc = new Character(new OrcCharacter());
$VSU = new Character(new VSUCharacter());

echo $VSU->run();
echo $orc->run();

echo $VSU->hit();
echo $orc->hit();

echo $VSU->getBriefing(date('d.m.Y'));
echo $orc->getBriefing(date('d.m.Y'));
