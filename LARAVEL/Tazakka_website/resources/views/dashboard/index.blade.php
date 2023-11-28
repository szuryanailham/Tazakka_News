<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tazakka||Dashboard </title>
    {{-- link css external --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    {{-- link css boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- icon boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    {{-- style hapus fiture aploud --}}
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none
        }
    </style>
</head>
<body>
    @include('dashboard.component.navbar')
    @include('dashboard.component.sidebar')
    <main class="mt-5 p-3">
        {{-- isi dari main --}}
        @yield('main-dashboard')
    </main>
    {{-- script mengapus fiutre --}}
    <script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });

        document.addEventListener('trix-file-accept',(e)=>{
            e.preventDefault()
        })
    </script>
    {{-- javascript boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
          $('[data-toggle="tooltip"]').tooltip();
        });
      </script> 
</body>
</html>