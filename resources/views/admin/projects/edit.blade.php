@extends('layouts.app')

@section('content')

<h1 class="text-center">Crea un nuovo progeto</h1>

<div class="container my-3">
    <form action="{{route('admin.projects.update',$project)}}" method="POST">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome Progetto</label>
        <input type="text" class="form-control" value="{{$project->name}}"  placeholder="Inserisci nome progetto" name="name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome cliente</label>
        <input type="text" class="form-control"  value="{{$project->client_name}}" placeholder="Inserisci il nome del cliente" name="client_name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Immagine</label>
        <input type="text" class="form-control" value="{{$project->cover_image}}" placeholder="Inserisci immagine" name="cover_image">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrizione</label>
        <textarea class="form-control"  rows="5" name="summary">{{$project->summary}}</textarea>
      </div>

      <button class="btn btn-primary" type="submit" >Invia</button>

    </form>

</div>


@endsection
