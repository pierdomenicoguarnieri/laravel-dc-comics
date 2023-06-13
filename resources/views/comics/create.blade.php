@extends('comics.layout.main_dashboard')

@section('title_dashboard')
  Crea un Prodotto
@endsection

@section('content_dashboard')
  <main>

    <div class="pg-form-wrapper">

      <div class="container my-5">

        <h1 class="mb-4">Crea un nuovo prodotto</h1>

        @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif


        <form action="{{route('comics.store')}}" method="POST" class="bg-light p-4 rounded-2 border border-1 shadow-sm">

          @csrf

          <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Titolo" value="{{old('title')}}">
            @error('title')
              <p class="text-danger ms-2">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Descrizione" value="{{old('description')}}"></textarea>
            @error('description')
              <p class="text-danger ms-2">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3">
            <label for="thumb" class="form-label">Link Immagine:</label>
            <textarea type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Link immagine" value="{{old('thumb')}}"></textarea>
            @error('thumb')
              <p class="text-danger ms-2">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="100.00" value="{{old('price')}}">
            @error('price')
              <p class="text-danger ms-2">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3">
            <label for="series" class="form-label">Serie:</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Serie" value="{{old('series')}}">
            @error('series')
              <p class="text-danger ms-2">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3">
            <label for="sale_date" class="form-label">Data:</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror"  placeholder="YYYY-MM-DD" pattern="\d{4}-\d{2}-\d{2}" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
              <p class="text-danger ms-2">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Tipo:</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Tipo" value="{{old('type')}}">
            @error('type')
              <p class="text-danger ms-2">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3">
            <label for="artists" class="form-label">Artisti:</label>
            <textarea type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="Artisti" value="{{old('artists')}}"></textarea>
            @error('artists')
              <p class="text-danger ms-2">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3">
            <label for="writers" class="form-label">Scrittori:</label>
            <textarea type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="Scrittori" value="{{old('writers')}}"></textarea>
            @error('writers')
              <p class="text-danger ms-2">{{$message}}</p>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Crea</button>
        </form>
      </div>
    </div>

  </main>
@endsection
