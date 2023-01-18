@extends('layouts.app')

@section('content')
<div class="container-fluid text-center ib-show">

<h1> Nome Progetto : {{$project->name}}</h1>
<h2>Nome Cliente : {{$project->client_name}}</h2>
<img src="{{$project->cover_image}}" alt="{{$project->name}}">
<p>Descrizzione : {{$project->summary}}</p>

</div>

@endsection
