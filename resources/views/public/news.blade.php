@extends('layouts.master')


@section('content')

<div class="container">

  <h1>Noticias</h1>

  <div class="card gedf-card">
    <div class="card-header">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex justify-content-between align-items-center">
            <div class="mr-2">
                <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
            </div>
            <div class="ml-2">
                <div class="h5 m-0">@LeeCross</div>
                <div class="h7 text-muted">Miracles Lee Cross</div>
            </div>
        </div>
        <div>
            <div class="dropdown">
                <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-h"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                    <div class="h6 dropdown-header">Configuration</div>
                    <a class="dropdown-item" href="#">Save</a>
                    <a class="dropdown-item" href="#">Hide</a>
                    <a class="dropdown-item" href="#">Report</a>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="card-body">
    <div class="text-muted h7 mb-2"> <i class="fa-solid fa-clock"></i> 10 min ago</div>
    <a class="card-link" href="#">
      <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
    </a>

    <p class="card-text">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
      sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
    </p>
    </div>
    <div class="card-footer">
    <a href="#" class="card-link"><i class="fa-brands fa-gratipay"></i> Like</a>
    <a href="#" class="card-link"><i class="fa-solid fa-comment"></i> Comentar</a>
    <a href="#" class="card-link"><i class="fa-solid fa-share"></i> Compartir</a>
    </div>
</div>
    </div>
@endsection