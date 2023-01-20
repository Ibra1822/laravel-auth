@extends('layouts.app')

@section('content')
<div class="container-fluid  text-center ib-show">

<h1> Nome Progetto : {{$project->name}}</h1>
<h2>Nome Cliente : {{$project->client_name}}</h2>
<img src="{{asset('storage/' . $project->cover_image )}}" alt="{{$project->original_image_name}}">
<p>{{$project->original_image_name}}</p>
<p>Descrizzione : {{$project->summary}}</p>

<a class="btn btn-dark" href="{{route('admin.projects.index')}}">Torna sui Progetti</a>


</div>

@endsection
