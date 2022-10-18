<?php


namespace App\Characters;

use App\Actions\Interfaces\IBriefing;
use App\Actions\Interfaces\IMovement;
use App\Actions\Interfaces\IWeapon;
use App\Characters\Interfaces\ICharacterFactory;
use App\Actions\GoodWill;
use App\Actions\Hand;
use App\Actions\NoLosses;

class OrcCharacter implements ICharacterFactory
{

    public function createRun(): IMovement
    {
        return new Goodwill();
    }

    public function createWeapon(): IWeapon
    {
        return new Hand();
    }

    public function createBriefing(): IBriefing
    {
        return new NoLosses();
    }
}
