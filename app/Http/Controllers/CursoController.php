<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Curso;
use App\File;
use App\Tag;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::whereIn('categoria_id', [1,2])->get();
        return view('admin.cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $curso = new Curso;
        $tags = Tag::all();
        $categorias = Categoria::all();
        return view('admin.cursos.create', compact('curso', 'tags', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validarRequest( $request );
        $curso = Curso::create($request->all());

        if ($curso->categoria_id == 2) {
            $curso->lugar = '';
            $curso->link_mp = '';
            $curso->update();
        }

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('public');
            $curso->foto = $foto;
            $curso->update();
        }

        if ($request->tags) {
            $tags = [];
            foreach ($request->tags as $tag) {
                $t = Tag::where('nombre', $tag)->first();
                if (!$t) {
                    $t = new Tag;
                    $t->nombre = $tag;
                    $t->save();
                }
                array_push($tags, $t->id);
            }

            $curso->tags()->attach($tags);
        }

        if ($curso->categoria_id == 1 || $curso->categoria_id == 2)
            return redirect('/cursos')->with('success', 'Actualizado correctamente.');
        if ($curso->categoria_id == 3)
            return redirect('/novedades')->with('success', 'Actualizado correctamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($curso)
    {
        $curso = Curso::where('id', $curso)->with(['tags'])->first();
        $tags = collect(Tag::all());
        $categorias = Categoria::all();
        return view('admin.cursos.edit', compact('curso', 'tags', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $curso)
    {
        $this->validarRequest( $request );
        $curso = Curso::findOrFail($curso);
        $curso->update($request->all());

        if ($curso->categoria_id == 2) {
            $curso->lugar = '';
            $curso->link_mp = '';
            $curso->update();
        }

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('public');
            $curso->foto = $foto;
            $curso->update();
        }

        if ($request->tags) {
            $tags = [];
            foreach ($request->tags as $tag) {
                $t = Tag::where('nombre', $tag)->first();
                if (!$t) {
                    $t = new Tag;
                    $t->nombre = $tag;
                    $t->save();
                }
                array_push($tags, $t->id);
            }

            $curso->tags()->sync($tags);
        }

        $files = $request->file('files');
        if ($request->hasFile('files')) {
            foreach ($files as $f) {
                $filename = $f->store('public');
                $file = new File;
                $file->path = $filename;
                $file->save();

                $curso->files()->save($file);
            }

        }

        if ($curso->categoria_id == 1 || $curso->categoria_id == 2)
            return redirect('/cursos')->with('success', 'Actualizado correctamente.');
        if ($curso->categoria_id == 3)
            return redirect('/novedades')->with('success', 'Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->tags()->detach();
        $curso->delete();
        return redirect('/dashboard')->with('success', 'Eliminado correctamente.');


    }

    private function validarRequest( $request )
    {
       return $this->validate($request, [
            'titulo' => 'required|string',
            'descripcion' => 'required|string'
        ]);
    }

    public function indexNovedades(Request $request)
    {
        $cursos = Curso::where('categoria_id', 3)->get();
        return view('admin.cursos.index', compact('cursos'));
    }

    public function uploadFile( $file )
    {
        $foto = $file;
        $originalName = $foto->getClientOriginalName();
        $extension = $foto->extension();
        $name = md5(date('Y-m-d H:i:s:u').$originalName);
        $extension = $extension;
        $path = $foto->storeAs('public/fotos', $this->name.'.'.$this->extension);
        $public_path = Storage::url($this->path);
    }
}
