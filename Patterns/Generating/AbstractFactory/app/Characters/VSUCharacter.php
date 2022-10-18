<?php


namespace App\Characters;

use App\Actions\Interfaces\Briefing;
use App\Actions\Interfaces\Movement;
use App\Actions\Interfaces\Weapon;
use App\Characters\Interfaces\CharacterFactory;
use App\Actions\Offensive;
use App\Actions\HIMARS;
use App\Actions\SecretData;

class VSUCharacter implements CharacterFactory
{

    public function createRun(): Movement
    {
        return new Offensive();
    }

    public function createWeapon(): Weapon
    {
        return new HIMARS();
    }

    public function createBriefing(): Briefing
    {
        return new SecretData();
    }
}
