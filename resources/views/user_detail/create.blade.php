@extends('layouts.app')

@section('content')

<div class="container">
<h2>Cuéntanos algo sobre ti</h2>


<form action="/user-detail" method='POST'>
    @csrf
  
  

    <x-form.text name="fullname"></x-form.text>

    <x-form.text name="email" type="email"></x-form.text>
    <x-form.text name="phone"></x-form.text>
    <x-form.text name="address"></x-form.text>
    <x-form.textarea name="summary"></x-form.textarea> 

    <input type="submit" class="btn btn-success" value="Guardar Detalles">

</form>

</div>


@endsection
