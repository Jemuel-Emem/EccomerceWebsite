<div>
    <div wire:ignore.self class="modal fade" id="update" tabindex="-1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-blue-700">
              <h5 class="modal-title text-white font-bold" id="exampleModalLabel">UPDATE PRODUCT</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="modal-body">
        <form class="" >
            <div class="form-group">
                <h5 class="text-success text-center">{{ $message }}</h5>
                <div wire:loading wirer:target="image" wire:key="image"><i class="fa fa-spinner fa-spin "></i></div>
                {{-- //preview image --}}
                {{-- @if ($image)
                <img src="{{ $image->temporaryUrl() }}" width="100" alt="">
                @endif --}}
                <label for="image">Upload Image</label>
                <input type="file" class="form-control p-1" id=""  placeholder="" wire:model="image"` required>
                @error('image') <span class="error text-danger">{{ $message }}</span>
                @enderror
              </div>

            <div class="form-group">
              <label for="">Product Name:</label>
              <input type="text" class="form-control" id=""  placeholder="" wire:model="productname" required>
              @error('productname') <span class="error text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Product Discription:</label>
              <input type="text" class="form-control" id="" placeholder="" wire:model="discription" required>
              @error('discription') <span class="error text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Product Price:</label>
                <input type="text" class="form-control" id="" placeholder="" wire:model="price" required>
                @error('price') <span class="error text-danger">{{ $message }}</span>
              @enderror
            </div>

             <div class="form-group">
                <label for="exampleInputPassword1">Product Stocks:</label>
                <input type="text" class="form-control" id="" placeholder="" wire:model="stocks" required>
                @error('stocks') <span class="error text-danger">{{ $message }}</span>
              @enderror
             </div>
           <div class="text-center"> <button type="submit" class="btn btn-primary " wire:click.prevent="update">Update Item</button></div>
          </form>

</div>

</div>
</div>
</div>
