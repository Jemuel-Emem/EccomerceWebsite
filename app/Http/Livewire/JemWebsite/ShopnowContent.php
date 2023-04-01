<?php

namespace App\Http\Livewire\JemWebsite;
use App\Models\shop;
use Livewire\Component;

class ShopnowContent extends Component
{
    public $deleteId = '';
    public $sub_id;
    public $productname;
    public $price;
    public $discription;
    public $stocks;
    public $product;
    public $search = '';
    protected $queryString = ['search'];

    public function render()
    {
        $this->product = shop::all();
        return view('livewire.jem-website.shopnow-content')->layout('livewire.layout.layout');
    }
}
