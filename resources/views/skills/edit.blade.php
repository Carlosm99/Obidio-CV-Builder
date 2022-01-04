@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Actualizar detalles de Skills</h2>

    <form action="{{route('skill.update', $skill)}}" method='POST'>
        @csrf
        @method('PUT')

        <input type="text" name='name' placeholder='Skill Name' value="{{$skill->name}}">


        <input type="text" name='rating' placeholder='Rating' value="{{$skill->rating}}">
<br><br>
        <input type="submit" class="btn btn-success" value="Actualizar Skill">

    </form>

</div>


@endsection
