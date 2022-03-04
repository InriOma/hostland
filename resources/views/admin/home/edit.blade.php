<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="card">
    <h5 class="card-header">Slider</h5>
    <div class="card-body">
      <h5 class="card-title">Editar Slider</h5>
        <form role="form" method="POST" action="{{ route('adminHomeUpdate', $home->id) }}">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="labelTitulo" class="form-label">Titulo</label>
            <input type="text" value="{{ $home->title }}"class="form-control" id="title" name="title" aria-describedby="tituloHelp" required>
          </div>

          <div class="mb-3">
            <label for="labelTitulo" class="form-label">Descripción</label>
            <input type="text" value="{{ $home->description }}"class="form-control" id="description" name="description" aria-describedby="tituloHelp" required>
          </div>

          <div class="mb-3">
            <label for="labelSubtitulo" class="form-label">Nombre Imagen</label>
            <input type="text" value="{{ $home->nameImage }}" class="form-control" id="nameImage  " name="nameImage" aria-describedby="subtituloHelp" required>
          </div>

          <div class="mb-3">
            <label for="labelTexto" class="form-label">URL</label>
            <input value="{{ $home->url }}" class="form-control" name="url" id="url">
          </div>

          <div class="mb-3">
            <label for="labelTexto" class="form-label">Orden</label>
            <input value="{{ $home->orden }}" class="form-control" name="orden" id="orden">
          </div>
    
    
          <button type="submit" class="btn btn-success">Enviar</button>

        </form>

    </div>
  </div>

  

</x-app-layout>