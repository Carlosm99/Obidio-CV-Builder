<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CV</title>

    <style>
        body {
            font-size: 17px;

        }

        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .container {
            width: 70%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">

        <section class="heading">

            <h2>{{ucfirst($user->details->fullname)}}</h2>

            <p>Correo Electrónico : {{$user->details->email}}</p>
            <p>Teléfono : {{$user->details->phone}}</p>
            <p>Dirección : {{$user->details->phone}}</p>



            <h2 class="sum">Resumen </h2>


            <p>{{$user->details->summary}}</p>


        </section>


        <section class="education">

            <h2>Educación </h2>

            @foreach($user->education as $e)

            <h4> Grado: {{$e->degree}}</h4>

            <p>Institución : {{$e->school_name}} </p>
            <p>Fecha Inicio: {{$e->graduation_start_date}} </p>
            <p>Fecha Graduación : {{$e->graduation_end_date}} </p>
            @endforeach
        </section>


        <section class="work">

            <h2>Experiencia</h2>

            @foreach($user->experiences as $work)
            <h3>
                Titulo de Trabajo: {{$work->job_title}}
            </h3>
            <p>Empleador: {{$work->employer}} </p>
            <p>Fecha Inicio: {{$work->start_date}} </p>
            <p>Fecha Final: {{$work->end_date}} </p>
            @endforeach
        </section>



        <section class="skills">

            <h2>Skills</h2>

            @foreach($user->skills as $skill)
            <h4> {{$skill->name}} ({{$skill->rating}} de 10)</h4>
            @endforeach
        </section>

    </div>
</body>

</html>
