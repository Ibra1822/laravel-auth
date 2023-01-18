@extends('layouts.app')

@section('content')
<h1 class="text-center">Projects</h1>


<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Client Name</th>
        <th scope="col">Control</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($projects as $project )
      <tr>
        <th scope="row">{{$project->id}}</th>
        <td>{{$project->name}}</td>
        <td>{{$project->client_name}}</td>
        <td>
            <a class="btn btn-primary" href="#"><i class="fa-solid fa-eye"></i></a>
            <a class="btn btn-warning" href="#"><i class="fa-solid fa-pen"></i></a>
            <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash-can"></i></a>
        </td>
      </tr>

    @endforeach
    </tbody>
  </table>
</div>



@endsection