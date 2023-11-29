<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/ad9e6c89e2.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet" />


  <!-- Scripts -->
  @vite([
      'resources/flowbite/dist/flowbite.css',
      'resources/css/app.css',
      'resources/flowbite/dist/flowbite.js',
      'resources/js/app.js',
  ])

</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endif

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>
  <script>
    function getElementId(obj) {
      var divClass = document.getElementById('manual-collapse-' + obj.id);
      if (divClass.style.display === "block") {
        divClass.style.display = "none";
      } else {
        divClass.style.display = "block";
      }
    }
    let table = $('#list').DataTable({
      "drawCallback": function() {
        function getElementId(obj) {
            var divClass = document.getElementById('manual-collapse-' + obj.id);
            if (divClass.style.display === "block") {
                divClass.style.display = "none";
            } else {
                divClass.style.display = "block";
            }
            // console.log(obj.id);

        };
        "autoWidth": false,
        "order": [
            [1, "asc"]
        ],
        "lengthMenu": [
            [20, 50, 100, -1],
            [20, 50, 100, "Todos"]
        ],
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "<i class='fa fa-search fa-lg' aria-hidden='true'></i>",
            "oPaginate": {
                "sNext": "&raquo;",
                "sPrevious": "&laquo;",
                "sFirst": "&laquo;&laquo;",
                "sLast": "&raquo;&raquo;"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },
        responsive: true,
    });
  </script>
</body>

</html>
