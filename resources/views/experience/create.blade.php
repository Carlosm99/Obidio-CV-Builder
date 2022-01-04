@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Crear detalles de Experiencia</h2>


    <form action="/experience" method='POST'>
        @csrf

        <input type="text" name='job_title' placeholder='Job Title'>

        <input type="text" name='employer' placeholder='Employer'>

        <input type="text" name='city' placeholder='city'>

        <input type="text" name='state' placeholder='state'>
<br>
<br>
        <input type="date" name='start_date'>
        <input type="date" name='end_date'>
<br>
<br>
        <input type="submit" class="btn btn-success" value="Crear Registro de Experiencia">

    </form>

</div>


@endsection
