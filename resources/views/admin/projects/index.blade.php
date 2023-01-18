@extends('layouts.app')

@section('content')
<h1 class="text-center mb-3">Projects</h1>

<div class="container text-center">

<a class="btn btn-warning " href="{{route('admin.projects.create')}}">Crea Un Nuovo Progetto</a>

</div>

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Client Name</th>
        <th class="text-center" scope="col">Control</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($projects as $project )

      <tr>
        <th scope="row">{{$project->id}}</th>
        <td>{{$project->name}}</td>
        <td>{{$project->client_name}}</td>
        <td class="d-flex justify-content-evenly ">
            <a class="btn btn-primary" href="{{route('admin.projects.show',$project)}}"><i class="fa-solid fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.projects.edit',$project)}}"><i class="fa-solid fa-pen"></i></a>
            <form onsubmit="return confirm('Sei sicuro di voler eliminare questo elemento')" action="{{route('admin.projects.destroy',$project)}}" method="POST" >
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
            </form>
        </td>
      </tr>

    @endforeach
    </tbody>
  </table>
</div>



@endsection
