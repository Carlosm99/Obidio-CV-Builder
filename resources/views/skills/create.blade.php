@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Crear un Skill</h2>


    <form action="/skill" method='POST'>
        @csrf

        <input type="text" name='name' placeholder='Nombre de Skill'>

        <input type="text" name='rating' placeholder='Rating'>

        {{-- <div class="form-group">
          <label for="rating">Rating</label>
          <select class="form-control" name="rating" id="rating">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>

          </select>
        </div> --}}

<br><br>
        <input type="submit" class="btn btn-success" value="Guardar Skill">

    </form>

</div>


@endsection
