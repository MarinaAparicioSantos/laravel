<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Editorial;
use Illuminate\Http\Request;

class biblioteca_Controller extends Controller
{
    public function index(){

        return "Página principal biblioteca.";

    }


    public function mostrarLibros(){

        $libros = Libro::all();

        return view('components.listar-libros' , ['libros' =>$libros]);

        
    }

    public function showLibro($ISBN){

        $libros = Libro::where('ISBN','like', "%$ISBN%")->paginate(13);


        return view('components.un-libro' , ['libro' =>$libros]);

    }

    public function editLibro(Libro $libro){

        return view('components.editar-libro', compact("libro"));

    }

    public function edit(Request $request){


        $ISBN = $_POST["ISBN"];
        $libro = Libro::find($ISBN);
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->idioma = $request->idioma;
        $libro->publicacion = $request->publicacion;
        $libro->id_Editorial = $request->id_Editorial;
        $libro->save();
        return $this->mostrarLibros();


        

    }


    public function createLibro(){

        return view('components.crear-libro');


    }



    public function store(Request $request){

        $libros = new Libro();
        $libros->ISBN = $request->ISBN;
        $libros->titulo = $request->titulo;
        $libros->autor = $request->autor;
        $libros->idioma = $request->idioma;
        $libros->publicacion = $request->publicacion;
        $libros->id_Editorial = $request->id_Editorial;
        $libros->save();
        return $this->mostrarLibros();


    }


    public function mostrarEditoriales(){

        $editoriales = Editorial::all();

        return view('components.listar-editoriales' , ['editoriales' =>$editoriales]);

        
    }


    public function mostrarUnaEditorial($id){

        $editoriales = Editorial::where('id','like', "%$id%")->paginate(13);

        return view('components.una-editorial' , ['editoriales' =>$editoriales]);

        
    }

    public function crear(){

        return view('components.crear-editorial');


    }

    public function createEditorial(Request $request){

        $editoriales = new Editorial();
        $editoriales->nombre = $request->nombre;
        $editoriales->nacionalidad = $request->nacionalidad;
        $editoriales->save();
        return $this->mostrarEditoriales();

    }
}
