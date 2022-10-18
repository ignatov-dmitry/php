<?php


namespace App\Actions\Interfaces;


interface Briefing
{
    public function getBriefing(string $date): string;
}
