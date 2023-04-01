<?php

namespace App\Http\Livewire\JemWebsite;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.jem-website.header')->layout('livewire.layout.layout');
    }


}
