<?php

namespace App\Models\Traits;

trait RelatesToTeams
{
    public function scopeForCurrentTeam($query)
    {
        $query->where('team_id', auth()->user()->currentTeam->id);
    }
}