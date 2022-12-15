@extends('Home.layout')
@section('content')
<h1>Editar Usuario</h1>
@include('Fragment._errors-form')
 
<form action="{{route('user.update', $user->id)}}" method="post">
    @method('PUT')
     @csrf
     @include('User.__Form')
 </form>
@endsection