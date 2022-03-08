<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Seeder;

class libros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro = new Libro();
        $libro->ISBN = "9780050666319" ;
        $libro->titulo = "Harry Potter y la piedra filosofal" ;
        $libro->autor = "J.K Rowling" ;
        $libro->idioma = "Inglés" ;
        $libro->publicacion = "1997-06-26" ;
        $libro->id_Editorial = 1 ;
        $libro->save();

        $libro2 = new Libro();
        $libro2->ISBN = "9780195798760" ;
        $libro2->titulo = "Harry Potter y la cámara secreta" ;
        $libro2->autor = "J.K Rowling" ;
        $libro2->idioma = "Español" ;
        $libro2->publicacion = "1998-07-02" ;
        $libro2->id_Editorial = 2 ;
        $libro2->save();



        $libro3 = new Libro();
        $libro3->ISBN = "9780195799156" ;
        $libro3->titulo = "Harry Potter y el prisionero de Azkaban" ;
        $libro3->autor = "J.K Rowling" ;
        $libro3->idioma = "Inglés" ;
        $libro3->publicacion = "1999-07-08" ;
        $libro3->id_Editorial = 1 ;
        $libro3->save();

        $libro4 = new Libro();
        $libro4->ISBN = "9780195799163" ;
        $libro4->titulo = "Harry Potter y el cáliz de fuego" ;
        $libro4->autor = "J.K Rowling" ;
        $libro4->idioma = "Español" ;
        $libro4->publicacion = "2000-07-08" ;
        $libro4->id_Editorial = 2 ;
        $libro4->save();


        $libro5 = new Libro();
        $libro5->ISBN = "9780320048395" ;
        $libro5->titulo = "Harry Potter y la orden del fénix" ;
        $libro5->autor = "J.K Rowling" ;
        $libro5->idioma = "Inglés" ;
        $libro5->publicacion = "2003-06-21" ;
        $libro5->id_Editorial = 1 ;
        $libro5->save();

        $libro6 = new Libro();
        $libro6->ISBN = "9780307283672" ;
        $libro6->titulo = "Harry Potter y el misterio del príncipe" ;
        $libro6->autor = "J.K Rowling" ;
        $libro6->idioma = "Español" ;
        $libro6->publicacion = "2005-07-16" ;
        $libro6->id_Editorial = 2 ;
        $libro6->save();


        $libro7 = new Libro();
        $libro7->ISBN = "9780545010221" ;
        $libro7->titulo = "Harry Potter y las reliquias de la muerte" ;
        $libro7->autor = "J.K Rowling" ;
        $libro7->idioma = "Inglés" ;
        $libro7->publicacion = "2007-07-21" ;
        $libro7->id_Editorial = 1 ;
        $libro7->save();


    }
}
