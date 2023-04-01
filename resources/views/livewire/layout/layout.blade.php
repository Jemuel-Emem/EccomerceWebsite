<!DOCTYPE html>
<html lang="en">
<head>
{{-- this is for google apis and font  --}}
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
{{-- this is for alphine --}}
<script src="//unpkg.com/alpinejs" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JEMUEL</title>
    @vite('resources/css/app.css')

    {{-- Bootstrap Styles --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    @livewireStyles
</head>
<body class="bg-blue-100">


    {{ $slot }}

    {{-- Bootstrap Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{  asset('sweetalert2/sweetalert2.min.css') }}">
    <script src="/path/to/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="/path/to/sweetalert2.min.css">

  <script>
  window.addEventListener('show-delete-confirmation', event =>{
  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      Livewire.emit('deleteConfirmed')
    )
  }
})
});

 window.addEventListener('product-deleted', event =>{
    Swal.fire(
      'Deleted!',
      'The data has been deleted.',
      'success'
    )
   });

    </script>


    @stack('scripts')
    @livewireScripts



</body>
</html>
