<?php


namespace App\Characters;

use App\Actions\Interfaces\Briefing;
use App\Actions\Interfaces\Movement;
use App\Actions\Interfaces\Weapon;
use App\Characters\Interfaces\CharacterFactory;
use App\Actions\GoodWill;
use App\Actions\Hand;
use App\Actions\NoLosses;

class OrcCharacter implements CharacterFactory
{

    public function createRun(): Movement
    {
        return new Goodwill();
    }

    public function createWeapon(): Weapon
    {
        return new Hand();
    }

    public function createBriefing(): Briefing
    {
        return new NoLosses();
    }
}
