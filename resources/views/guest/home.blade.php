@extends('layouts.guest')

@section('content')

<h1 class="text-center" >Home di {{Auth::user()->name}}</h1>

@endsection
