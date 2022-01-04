@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session()->has('success'))

                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif

                    ¡Has iniciado sesión!
                    <br>
                    <br>
                    <!-- if file exist show div below -->
                    @if(\Storage::disk('s3')->exists('resume/'.auth()->user()->id.'.pdf'))
                    <div class="card" style="width: 14rem;">
                        <img class="card-img-top" src="{{url('/images/pdf.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">nombre archivo: {{auth()->user()->id}}</p>

                        </div>
                        <div class="card-footer text-center">

                            <!-- <p style="color:green;">Controles</p> -->

                            
                            
                            <a href=" {{route('resume.getPdf')}} " target="_blank"class="btn btn-primary btn-sm float-left" id="left" style="color:white"><i class="fas fa-file-download"></i></a>


                            <a href=" {{route('resume.deletePdf')}} "  class="btn btn-danger btn-sm float-right" id="right" style="color:white"><i class="fas fa-trash-alt"></i></a>
                            <!-- <a name="" id="" class="btn btn-primary" href="{{route('resume.download')}}" role="button">Descargar</a> -->
                        </div>
                    </div>
                    @endif               


                </div>
            </div>

        </div>
    </div>
</div>
@endsection