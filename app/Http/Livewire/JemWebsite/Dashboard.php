<?php

namespace App\Http\Livewire\JemWebsite;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.jem-website.dashboard')->layout('livewire.layout.layout');
    }

    public function like(){
        return view('livewire.jem-website.shopnow-content');
    }
}
