
@extends('home.layout')
@section('content')
    <div>
        <a href="{{route('user.create')}}">crear</a>
        <table>
            <tr>
                <th>Name</th>          
                <th>Surname</th>          
                <th>Email</th>
                <th>phone</th>
                <th>User</th>
                <th>password</th>
                <th>Profile</th>
                <th>Actions</th>          
              </tr>
        
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->user}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->profile->title}}</td>
                    <td>
                        <a href="{{route('user.show',$user)}}">ver</a>
                        <a href="{{route('user.edit',$user)}}">editar</a>
                        <form action="{{route('user.destroy',$user)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Elimiar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$users->links()}}
    </div>
@endsection