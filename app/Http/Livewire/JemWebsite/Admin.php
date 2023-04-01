<?php

namespace App\Http\Livewire\JemWebsite;
use App\Models\shop;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Livewire\WithPagination;

class Admin extends Component
{
    public $deleteId = '';
    public $sub_id;

    public $productname;
    public $price;
    public $discription;
    public $stocks;
    public $product;
    public $image;
    public $message;


    public $search = '';

    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    protected $queryString = ['search'];

    use WithFileUploads;


    public function addProduct(){
        $this->validate([
            'image' =>'required',
            'productname' => 'required', //students = table name
            'price' => 'required|integer',
            'discription' => 'required|max:30',
            'stocks' => 'required|integer'

        ]);

        // $uploadImage =$this->image->store('public/uploads');
        // $this->personalInformation->update([
        //     'photo' => $this->photo->store('photos', 'public'),
        // ]);

        // $this->image->store('public/uploads');
        $product = new shop();
        //   $product->image = $this-> image;
        $product->image=$this->image->store('photos','public');
        $product->productname = $this->productname;
        $product->price = $this->price;
        $product->discription = $this->discription;
        $product->stocks = $this->stocks;

        $product->save();
        $this->resetFields();

    }

    public function resetFields(){
        $this->image=Null;
        $this->productname='';
        $this->price='';
        $this->discription='';
        $this->stocks='';
        $this->message='Successfully Added';

    }

    public function updateReset(){
        $this->image=Null;
        $this->productname='';
        $this->price='';
        $this->discription='';
        $this->stocks='';


    }

    public function edit($id)
    {
        $this->validate([
            'image' =>'required',
           ]);
        $product = shop::where('id',$id)->first();
        $this->sub_id = $product->id; //we need this for updating the id
        $this->id = $id;
        $this->image = $product->image;
        $this->productname = $product->productname;
        $this->price= $product->price;
        $this->discription= $product->discription;
        $this->stocks = $product->stocks;


    }

    public function update()
   {
       $this->validate([

        'image' =>'required',
        'productname' => 'required', //students = table name
        'price' => 'required|integer',
        'discription' => 'required|max:30',
        'stocks' => 'required|integer'

       ]);
       $product =shop::where('id', $this->sub_id)->first();
       $product->image =$this->image->store('photos','public');
       $product->productname = $this->productname;
       $product->price = $this->price;
       $product->discription = $this->discription;
       $product->stocks = $this->stocks;
       $product->save();
       $this->message='Successfully Updated';
       $this->updateReset();
       //For hide modal after add student success


   }

   public function close()
   {
       $this->dispatchBrowserEvent('close-modal');
       $this->updateReset();
   }

   public function deleteConfirmation($id){
   $this->deleteId= $id;
   $this->dispatchBrowserEvent('show-delete-confirmation');
}

public function deleteItem(){
    $product = shop::where('id', $this->deleteId)->first();
    $product->delete() ;
    $this->dispatchBrowserEvent('product-deleted');
}

public function destroy($id)
{
    shop::find($id)->delete();

    session()->flash('message','Order deleted successfully!');
}

    public function render()
    {
        $this->product = shop::all();
        return view('livewire.jem-website.admin')->layout('livewire.layout.layout');
    }
}
