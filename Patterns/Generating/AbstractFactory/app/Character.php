<?php
namespace App;

use App\Actions\Interfaces\IBriefing;
use App\Actions\Interfaces\IMovement;
use App\Actions\Interfaces\IWeapon;
use App\Characters\Interfaces\ICharacterFactory;

class Character
{
    private IWeapon $weapon;

    private IMovement $move;

    private IBriefing $briefing;

    public function __construct(ICharacterFactory $characterFactory)
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
