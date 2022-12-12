<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public  int $totalMembers;
    
    public int  $totalFiles;
    
    public  int $totalFolders;

    public int  $totalTeams;

    public bool $teamOwner = false;

    public function mount() : void
    {
        $this->totalMembers = User::where('current_team_id', auth()->user()->current_team_id)->count();
        $this->totalFiles = auth()->user()->currentTeam->objects->count();
        $this->totalTeams = auth()->user()->ownedTeams->count();
        if (auth()->user()->ownedTeams->count() > 0) {
            $this->teamOwner = true;
        }
    }

    public function render(): View
    {
        return view('livewire.dashboard');
    }

}
