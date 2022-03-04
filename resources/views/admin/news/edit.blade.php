<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="card">
    <h5 class="card-header">Noticias</h5>
    <div class="card-body">
      <h5 class="card-title">Editar Noticia</h5>
        <form role="form" method="post" action="{{ route('adminNewsCreate') }}">
          @csrf

          <div class="mb-3">
            <label for="labelTitulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="tituloHelp" required>
          </div>

          <div class="mb-3">
            <label for="labelSubtitulo" class="form-label">Subtitulo</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" aria-describedby="subtituloHelp" required>
          </div>

          <div class="mb-3">
            <label for="FormControlTextarea" class="form-label">Texto</label>
            <textarea class="form-control" id="text" nane="text" rows="3"></textarea>
          </div>
    
          <button type="submit" class="btn btn-success">Enviar</button>

        </form>

    </div>
  </div>

  

</x-app-layout>