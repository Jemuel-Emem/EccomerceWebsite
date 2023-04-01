<div>
@include('livewire.jem-website.modal-update-product')
@include('livewire.jem-website.modal-add-product')
@include('livewire.jem-website.admin-header')

<div class="container pt-2 flex justify-between items-center">
    <button type="button" class="bg-blue-700 w-3/12 h-12 text-white rounded hover:bg-blue-500" data-toggle="modal" data-target="#addProduct">
         Add Items
      </button>

      <div>
        <input type="text" name="" id="" placeholder="Search..." class="rounded h-8">
      </div>

</div>
<div class="container ">
<div class="pt-2 row">
    <div class="col-lg-12 ">
    <table class="table table-hover border">
        <thead class="bg-blue-700 text-white">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">image</th>
            <th scope="col">Product name</th>
            <th scope="col">Discription</th>
            <th scope="col">Price</th>
            <th scope="col">Stocks</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ( $product as $data1)
            <tr>

                <td>{{ $data1->id }}</td>
                <td> <img src="{{ Storage::url($data1->image) }}" style="width:70px; height:70px" alt="none" class="border rounded"> </td>
                <td>{{ $data1 ->productname }}</td>
                <td>{{ $data1 ->discription }}</td>
                <td>{{$data1 ->price }}</td>
                <td>{{ $data1 ->stocks }}</td>
                <td>
                    <i class="ri-pencil-line text-blue-700 hover:text-blue-500"  data-toggle="modal" data-target="#update" wire:click="edit({{$data1->id}})" ></i>
                    <a href="javascript::void(0)"><i class="ri-delete-bin-7-line text-red-500" wire:click.prevent='deleteConfirmation({{$data1->id}})'  ></i></a>

                </td>
              </tr>
            @empty
                <p>No data found</p>
            @endforelse


        </tbody>
      </table>

</div>
</div>
</div>
 {{-- @include('livewire.jem-website.footer') --}}

 <div>
 </div>
</div>
