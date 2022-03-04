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

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
      @endif

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
            <td>{{ $noticia->title }}</td>
            <td>{{ $noticia->subtitle }}</td>
            <td>{{ \Str::limit($noticia->texto, 100) }}</td>
            <td><a href="{{ route('adminNewsEdit', $noticia->id) }}" class="btn btn-primary m-2"> Editar</a></td>
            <td>
              <form action="{{ route('adminNewsDestroy',$noticia->id) }}" method="POST">     
                @csrf
                @method('DELETE')      
                <button type="submit" class="btn btn-danger m-2">Borrar</button>
              </form>
            </td>
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