@extends('layouts.master')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="form-area">

        <form role="form" method="post" action="{{ route('contacto') }}">
          @csrf

          <div class="mb-3">
            <label for="labelName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
          </div>

          <div class="mb-3">
            <label for="labelLastname" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastNameHelp" required>
          </div>

          <div class="mb-3">
            <label for="InputEmail1" class="form-label">Corre Electrónico</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
          </div>

          <div class="mb-3">
            <label for="labelSubject" class="form-label">Asunto</label>
            <input type="text" class="form-control" id="subject" name="subject" aria-describedby="subjectHelp" required>
          </div>

          <div class="mb-3">
            <label for="labelTel" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="tel" name="tel" aria-describedby="telHelp" required>
          </div>

          <div class="mb-3">
            <label for="FormControlTextarea1" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" nane="message" maxlength="140" rows="7"></textarea>
            <div id="characterLeft" class="form-text">140 caracteres restantes</div>
          </div>
    
          <button type="submit" class="btn btn-success">Enviar</button>

        </form>

      </div>
    </div>
  </div>
</div>
    
@endsection