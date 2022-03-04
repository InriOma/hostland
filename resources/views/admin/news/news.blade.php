<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="card">
    <h5 class="card-header">Noticias</h5>
    <div class="card-body">
      <h5 class="card-title">Listado de Noticias</h5>
        <a href="{{ route('adminNewsCreate') }}" class="btn btn-success m-2"> Agregar Noticia</a>
        <table id="myTableNews" class="table table-bordred table-striped">
          <thead>     
            <th><input type="checkbox" id="checkall" /></th>
            <th>Titulo</th>
            <th>Subtitulo</th>
            <th>Texto</th>
            <th>Editar</th>
            <th>Borrar</th>
          </thead>
          <tbody>
          @foreach ($noticias as $noticia)
            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>{{ $noticia->titulo }}</td>
              <td>{{ $noticia->subtitle }}</td>
              <td>{{ $noticia->text }}</td>
              <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span>Editar</button></p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Borrar"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span>Borrar</button></p></td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
  </div>

  

  <script type="text/javascript">
    $(document).ready(function(){
      $("#myTableNews #checkall").click(function () {
        if ($("#myTableNews #checkall").is(':checked')) {
            $("#myTableNews input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#myTableNews input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
      });
          
      $("[data-toggle=tooltip]").tooltip();
    });
  </script>
</x-app-layout>