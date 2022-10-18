<?php


namespace App\Actions\Interfaces;


interface IBriefing
{
    public function getBriefing(string $date): string;
}
