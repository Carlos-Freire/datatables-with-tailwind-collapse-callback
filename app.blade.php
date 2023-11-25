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
    //   'resources/css/jquery.dataTables.css',
      'resources/flowbite/dist/flowbite.js',
      'resources/js/app.js',
    //   'resources/js/jquery.min.js',
    //   'resources/js/jquery.dataTables.js',
    //   'resources/js/customDataTable.js',
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
    let table = $('#lista').DataTable({
        "drawCallback": function () {
            $('.manualCollapse').on('click', function () {
                var obj = $('#manual-collapse-'+this.getAttribute('id'));
                var hasClass = $(obj).attr('class');
                if(hasClass.indexOf('hidden') > -1){
                    $(obj.removeClass('hidden').addClass('show'))
                }
                else{
                    $(obj.removeClass('show').addClass('hidden'))
                }
            });
        },
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