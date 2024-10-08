<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserProfiling extends Component
{   
    #[Layout('components.layouts.user-profiling')]
    public function render()
    {
        return view('livewire.user.user-profiling');
    }
}
