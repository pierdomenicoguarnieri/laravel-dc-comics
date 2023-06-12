@extends('comics.layout.main_dashboard')

@section('title_dashboard')
  Index
@endsection

@section('content_dashboard')
  <main>
    <div class="container my-4">
      <h1 class="mb-4">Lista dei fumetti</h1>
      <div class="pg-table-wrapper rounded-2 border border-1 shadow-sm overflow-hidden">
        <table class="table table-light mb-0">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Title</th>
              <th scope="col">Series</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($comics as $comic)
            <tr class="vertical-align-middle">
              <th scope="row">{{$comic->id}}</th>
              <td>{{$comic->title}}</td>
              <td>{{$comic->series}}</td>
              <td><a href="{{route('comics.show', $comic)}}" class="btn btn-primary">Vai</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </main>
@endsection
