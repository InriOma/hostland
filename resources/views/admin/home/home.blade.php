<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="card">
    <h5 class="card-header">Módulo Home</h5>
    <div class="card-body">
      <h5 class="card-title">Slider Home</h5>

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
      @endif

      <table id="myTableHome" class="table table-bordred table-striped">
        <thead>     
          <th><input type="checkbox" id="checkall" /></th>
          <th>Titulo</th>
          <th>Descripción</th>
          <th>Nombre Imagen</th>
          <th>URL</th>
          <th>Orden</th>
          <th>Editar</th>
        </thead>
        <tbody>
        @foreach ($sliders as $slider)
          <tr>
            <td><input type="checkbox" class="checkthis" /></td>
            <td>{{ $slider->title }}</td>
            <td>{{ $slider->description }}</td>
            <td>{{ $slider->nameImage }}</td>
            <td>{{ $slider->url }}</td>
            <td>{{ $slider->orden }}</td>
            <td><a href="{{ route('adminHomeEdit', $slider->id) }}" class="btn btn-primary m-2"> Editar</a></td>
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