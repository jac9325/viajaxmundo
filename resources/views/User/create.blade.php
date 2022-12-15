@extends('Home.layout')
@section('content')
<h1>Hola bienvenido a Crear Usuarios</h1>
@include('Fragment._errors-form')
 
<form action="{{route('user.store')}}" method="POST">
     @csrf
     @include('User.__Form')
 </form>
@endsection