<div>
 @include('livewire.jem-website.header')

 <div class="container pt-4 flex justify-start items-center">
   <div class="">
    <input type="text" name="" id="" placeholder="search" class="p-1 w-64  outline-blue-500 outline-none border " >
    <button class="bg-blue-700 text-white h-10 p-2 mx-auto rounded hover:bg-blue-500">Search</button>
   </div>
 </div>
 <div class="container pt-3">
 <div class="row">
    @forelse($product as $post)
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">
            <img src="{{ Storage::url($post->image) }}" style="widows: 70px; height:150px" alt="none" class="border">
            <div class="card-body">
                <h2 class="card-text">{{ $post->productname }}</h2>
                <p class="card-text">{{ $post->price }}</p>
                <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">{{ $post->discription }}</small>
                <small class="">stocks <a class="">{{ $post->stocks }}</a></small>
                </div>
            </div>

            <div class="card-body flex justify-center items-center">
                <button class="bg-blue-700 text-white p-2 rounded">Add to cart</button>

                {{-- <button class="btn btn-warning" data-toggle="modal" data-target="#updatedata" wire:click="edit({{$post->id}})">Update</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#delete" wire:click="deleteId({{$post->id}})">Delete</button> --}}
            </div>
        </div>
    </div>
    @empty
        <div class="offset-lg-6"><p>No found item</p></div>
    @endforelse
</div>
</div>
 @extends('livewire.jem-website.footer')
</div>
