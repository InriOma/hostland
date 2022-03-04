<x-app-layout>
  <x-slot name="header">
    <h2 class="h4 font-weight-bold">
        {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="container">
    <div class="row">
      
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">       
        <div class="box-part text-center">
          <i class="fa-solid fa-house fa-3x"></i>
          <div class="title">
            <h4>Home</h4>
          </div>
          <div class="text">
            <span>Create, Read, Update, Delete</span>
          </div>
          <a href="{{ route('adminHome') }}">Entrar</a>
        </div>
      </div>	 
      
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="box-part text-center">
          <i class="fa-brands fa-neos fa-3x"></i>
          <div class="title">
            <h4>Noticias</h4>
          </div>
          <div class="text">
            <span>Create, Read, Update, Delete</span>
          </div>
          <a href="{{ route('adminNews') }}">Entrar</a>
        </div>
      </div>	 
      
    </div>		
  </div>
</x-app-layout>