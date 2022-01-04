@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Actualizar Educación </h2>


    <form action="{{route('education.update', $education)}}" method='POST'>
        @csrf
        @method('PUT')

    <input type="text" name='school_name' placeholder='school name' value="{{$education->school_name}}">

        <input type="text" name='school_location' placeholder='location' value="{{$education->school_location}}">

        <input type="text" name='degree' placeholder='degree' value="{{$education->degree}}">

        <input type="text" name='field_of_study' placeholder='faculty' value="{{$education->field_of_study}}">
<br>
<br>
        <input type="date" name='graduation_start_date' value="{{$education->graduation_start_date}}">
        <input type="date" name='graduation_end_date' value="{{$education->graduation_end_date}}">
<br>
<br>
        <input type="submit" class="btn btn-success" value="Actualizar Educación ">

    </form>

</div>


@endsection
