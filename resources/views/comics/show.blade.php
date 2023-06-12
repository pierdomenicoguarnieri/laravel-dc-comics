@extends('comics.layout.main_dashboard')

@section('title_dashboard')
  Show Comic {{$comic->id}}
@endsection

@section('content_dashboard')
<main>
  <div class="container d-flex flex-column align-items-center my-4">
    <h1 class="mb-4">Comic Infos</h1>

    <div class="pg-card-wrapper w-50">
      <div class="card">
        <img class="w-100" src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}" title="{{$comic->title}}">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title mb-3">{{$comic->title}}</h5>
          <p class="card-text mb-3"><span class="fw-bold">Descrizione:</span> {{$comic->description}}</p>
          <span class="card-text mb-3"><span class="fw-bold">Prezzo:</span> {{$comic->price}}</span>
          <span class="card-text mb-3"><span class="fw-bold">Data di uscita:</span> {{$comic->sale_date}}</span>
          <span class="card-text mb-3"><span class="fw-bold">Tipo:</span> {{$comic->type}}</span>
          <span class="card-text mb-3"><span class="fw-bold">Artisti:</span> {{$comic->artists}}</span>
          <span class="card-text mb-3"><span class="fw-bold">Scrittori:</span> {{$comic->writers}}</span>
          <a href="{{route('comics.index')}}" class="btn btn-primary">Torna alla lista</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
