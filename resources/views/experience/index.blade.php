@extends('layouts.app')

@section('content')

<h2>Experiencia </h2>

@foreach($experiences as $e)

<div class="card">
    <div class="card-body">
        <h4 class="card-title"> {{$e->job_title}}  ({{$e->start_date}} to {{$e->end_date}}) </h4>

        <ul>
            <li>{{ $e->employer}}</li>
            <li>{{ $e->city}}</li>
            <li>{{ $e->state}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('experience.edit', $e)}} " role="button">Actualizar</a>

        <form action="{{route('experience.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>




@endforeach
<div class="mt-2">
    <a href=" {{route('experience.create')}} ">+ Agregar Experiencia </a>
</div>

<div class="text-right">
    <a class=" btn btn-primary" href=" {{route('skill.index')}} " role="button">Avanzar a Skills</a>
</div>


@endsection
