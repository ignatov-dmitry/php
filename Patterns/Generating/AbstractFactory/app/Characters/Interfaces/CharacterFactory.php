<?php


namespace App\Characters\Interfaces;


use App\Actions\Interfaces\Briefing;
use App\Actions\Interfaces\Movement;
use App\Actions\Interfaces\Weapon;

interface CharacterFactory
{
    public function createRun(): Movement;

    public function createWeapon(): Weapon;

    public function createBriefing(): Briefing;
}
