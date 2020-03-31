<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SitioController extends Controller
{
    public function home(Request $request)
    {
    	return view('sitio.home');
    }

    public function showCurso( Request $request, $slug )
    {
    	$curso = Curso::where('slug', $slug)->with(['foto'])->first();
    	return view('sitio.blog-single', compact('curso'));
    }

    public function cursos( Request $request )
    {
        $cat_id = null;
        if ($request->categoria) {
            $cat_id = Categoria::where('slug', $request->categoria)->firstOrFail()->id;
            $cursos = Curso::where('categoria_id', $cat_id)->get();
        }else{
            $cursos = Curso::all();
        }

        return view('sitio.blog', compact('cursos', 'cat_id'));
    }

    public function contacto( Request $request)
    {
    	return view('sitio.contacto');
    }

    public function nosotros( Request $request)
    {
    	return view('sitio.nosotros');
    }

    public function empresaDeFamilia( Request $request)
    {
    	return view('sitio.empresa-de-familia');
    }

    public function sendContact( Request $request)
    {
    	//return $request;
        $data = $request;
    
        Mail::send('email.welcome', ['data' => $data], function($message) use ($request)
        {
            $receiver = 'info@fimeint.org';
            $message
                ->to('elias.ravarotto@gmail.com')
                ->subject('Contacto Sitio web FIMe');
        });

        return 'success';
    }

    public function mediacion()
    {
        return view('sitio.mediacion');
    }

    public function negociacion()
    {
        return view('sitio.negociacion');
    }

    public function arbitraje()
    {
        return view('sitio.arbitraje');
    }
}
