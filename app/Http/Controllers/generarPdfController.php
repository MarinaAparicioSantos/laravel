<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Libro;


class generarPdfController extends Controller
{
    
    public function variosPDF(){


            $libros = Libro::all();

            $pdf = PDF::loadView('components.varios-libros-p-d-f', ['libros'=>$libros]);

            return $pdf->download('LibrosHarryPotter.pdf');
    

    }


        
    public function unoPDF($ISBN){


            $libro = Libro::find($ISBN);

            $pdf = PDF::loadView('components.un-libro-p-d-f', ['libro'=>$libro]);

            return $pdf->download('LibroHarryPotter.pdf');
        
        
    }


}
