<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserAssessment extends Component
{   #[Layout('components.layouts.user-assessment')]
    public function render()
    {
        return view('livewire.user.user-assessment');
    }
}
