<?php


namespace App\Characters;

use App\Actions\Interfaces\IBriefing;
use App\Actions\Interfaces\IMovement;
use App\Actions\Interfaces\IWeapon;
use App\Characters\Interfaces\ICharacterFactory;
use App\Actions\Offensive;
use App\Actions\HIMARS;
use App\Actions\SecretData;

class VSUCharacter implements ICharacterFactory
{

    public function createRun(): IMovement
    {
        return new Offensive();
    }

    public function createWeapon(): IWeapon
    {
        return new HIMARS();
    }

    public function createBriefing(): IBriefing
    {
        return new SecretData();
    }
}
