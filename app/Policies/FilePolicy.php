<?php

namespace App\Policies;

use App\Models\File;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilePolicy
{
    use HandlesAuthorization;

    public function download(User $user, File $file)
    {
        return $file->team_id === $user->currentTeam->id;
    }
}
