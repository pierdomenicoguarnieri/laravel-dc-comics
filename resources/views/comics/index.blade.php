@extends('comics.layout.main_dashboard')

@section('title_dashboard')
  Index
@endsection

@section('content_dashboard')
  <main>
    <div class="container my-4">
      <h1 class="mb-2">Lista dei fumetti</h1>

      <a href="{{route('comics.create')}}" class="btn btn-success mb-2">Aggiungi un prodotto<i class="fa-solid fa-plus ms-2"></i></a>

      <div class="pg-table-wrapper rounded-2 border border-1 shadow-sm overflow-hidden">
        <table class="table table-light mb-0">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Title</th>
              <th scope="col">Series</th>
              <th scope="col" class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($comics as $comic)
            <tr class="vertical-align-middle">
              <th scope="row">{{$comic->id}}</th>
              <td>{{$comic->title}}</td>
              <td>{{$comic->series}}</td>
              <td class="text-center">
                <a href="{{route('comics.show', $comic)}}" class="btn btn-primary" title="Mostra"><i class="fa-solid fa-eye"></i></a>
                <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning" title="Modifica"><i class="fa-solid fa-pencil"></i></a>
                <a href="{{route('comics.destroy', $comic)}}" class="btn btn-danger" title="Elimina"><i class="fa-solid fa-trash-can"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </main>
@endsection
