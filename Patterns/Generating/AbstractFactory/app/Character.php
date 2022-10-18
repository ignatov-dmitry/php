<?php
namespace App;

use App\Actions\Interfaces\Briefing;
use App\Actions\Interfaces\Movement;
use App\Actions\Interfaces\Weapon;
use App\Characters\Interfaces\CharacterFactory;

class Character
{
    private Weapon $weapon;

    private Movement $move;

    private Briefing $briefing;

    public function __construct(CharacterFactory $characterFactory)
    {
        $this->move = $characterFactory->createRun();
        $this->weapon = $characterFactory->createWeapon();
        $this->briefing = $characterFactory->createBriefing();
    }

    public function run(): string
    {
        return $this->move->move();
    }

    public function hit(): string
    {
        return $this->weapon->hit();
    }

    public function getBriefing(string $date): string
    {
        return $this->briefing->getBriefing($date);
    }
}
