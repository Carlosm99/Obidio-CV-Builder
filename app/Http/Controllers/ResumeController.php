<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use Storage;

class ResumeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
     
        return view('resume-ref', compact('user'));
     
    }

    public function download()
    {
        $user = auth()->user();

        $pdf = \PDF::loadView('resume-ref', compact('user'));
        //upload pdf to s3 bucket aws
        // \Storage::disk('s3')->put('resume/'.$user->id.'.pdf', $pdf->output(), 'public');

        //strore pdf locally in machine
        return $pdf->download('resume.pdf');
    }
   

    //get pdf files from s3 bucket
    // public function getPdf()
    // {
    //     $user = auth()->user();
    //     $file = \Storage::disk('s3')->get('resume/'.$user->id.'.pdf');
    //     return response($file, 200)
    //         ->header('Content-Type', 'application/pdf');

    // }
        // $pdf = \Storage::disk('s3')->get('resume/'.$id.'.pdf');
        // return $pdf;
    

    //delete pdf files from s3 bucket
    public function deletePdf()
    {
        $user = auth()->user();
        $file_path = parse_url('resume/'.$user->id.'.pdf');
        \Storage::disk('s3')->delete($file_path);
        return redirect('/home');
    }

 

    //upload pdf to s3 bucket aws
    public function uploadPdf()
    {
        $user = auth()->user();
        $pdf = \PDF::loadView('resume-ref', compact('user'));
        \Storage::disk('s3')->put('resume/'.$user->id.'.pdf', $pdf->output(), 'public-read');

        return redirect('/home')->with('success', 'PDF subido correctamente a aws S3');
    }

    //download pdf from s3 bucket aws
    public function downloadPdf()
    {
        $user = auth()->user();
        \Storage::disk('s3')->download('resume/'.$user->id.'.pdf');
        // return $pdf->download($user->id.'.pdf');
        return redirect('/home')->with('success', 'PDF descargado correctamente de aws S3');
    }
    

    //download pdf from s3 bucket aws
    public function getPdf()
    {
        $user = auth()->user();
        $file = \Storage::disk('s3')->get('resume/'.$user->id.'.pdf');
        return response($file, 200)
            ->header('Content-Type', 'application/pdf');
            header('Content-Disposition', 'inline; filename="'.$user->id.'.pdf"');

    }
    
   
    
}

