<?php


namespace App\Characters\Interfaces;


use App\Actions\Interfaces\IBriefing;
use App\Actions\Interfaces\IMovement;
use App\Actions\Interfaces\IWeapon;

interface ICharacterFactory
{
    public function createRun(): IMovement;

    public function createWeapon(): IWeapon;

    public function createBriefing(): IBriefing;
}
