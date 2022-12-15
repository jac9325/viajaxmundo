<label for="">Nombres
    <input type="text" name="name" value="{{old("name",$user->name)}}">
</label>

<label for="">Apellidos</label>
<input type="text" name="surname" value="{{old("surname",$user->surname)}}">

<label for="">Email</label>
<input type="email" name="email" value="{{old("email",$user->email)}}">

<label for="">Pais</label>
<input type="text" name="country" value="{{old("country",$user->country)}}">

<label for="">Fecha</label>
<input type="date" name="date" value="{{ old('date', $user->date) }}" >

<label for="">Teléfono</label>
<input type="text" name="phone" value="{{old("phone",$user->phone)}}">

<label for="">Usuario</label>
<input type="text" name="user" value="{{old("user",$user->user)}}">

<label for="">Contraseña</label>
<input type="password" name="password" value="{{old("user",$user->password)}}">

<label for="">Confirmar Contraseña</label>
<input type="password" name="password_confirm" value="{{old("user",$user->password)}}">

<label for="">Perfil</label>
<select name="profile_id" id="">
    @foreach ($profiles as $title=>$id)
        <option value="{{$id}}" {{old("profile_id",$user->profile_id) == $id ? 'selected': ""}}>{{$title}}</option>
    @endforeach
</select>

<label for="">Estado</label>
<select name="status" id="">
    <option value="1">Activo</option>
    <option value="0">Inactivo</option>
</select>

<button type="submit">Enviar</button>