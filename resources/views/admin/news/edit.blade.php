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
        <form role="form" method="POST" action="{{ route('adminNewsUpdate', $news->id) }}">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="labelTitulo" class="form-label">Titulo</label>
            <input type="text" value="{{ $news->title }}"class="form-control" id="title" name="title" aria-describedby="tituloHelp" required>
          </div>

          <div class="mb-3">
            <label for="labelSubtitulo" class="form-label">Subtitulo</label>
            <input type="text" value="{{ $news->subtitle }}" class="form-control" id="subtitle" name="subtitle" aria-describedby="subtituloHelp" required>
          </div>

          <div class="mb-3">
            <label for="labelTexto" class="form-label">Texto</label>
            <textarea class="form-control" name="texto" id="texto" rows="3">{{ $news->texto }}</textarea>
          </div>
    
    
          <button type="submit" class="btn btn-success">Enviar</button>

        </form>

    </div>
  </div>

  

</x-app-layout>