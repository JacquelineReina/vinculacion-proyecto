<?php

use Illuminate\Database\Seeder;
use App\Libro;
use Carbon\Carbon;
use App\Categoria;
use App\Etiqueta;

class LibrosTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    Categoria::truncate(); // Evita duplicar datos

    $categoria = new Categoria();
    $categoria->nombre = "Oscar Calle";
    $categoria->save();

    $categoria = new Categoria();
    $categoria->nombre = "Jairo Calle";
    $categoria->save();

    $categoria = new Categoria();
    $categoria->nombre = "Carmita Saquicela";
    $categoria->save();

    Etiqueta::truncate(); // Evita duplicar datos

    $etiqueta = new Etiqueta();
    $etiqueta->nombre = "Martillo";
    $etiqueta->save();

    $etiqueta = new Etiqueta();
    $etiqueta->nombre = "Serrucho";
    $etiqueta->save();

    $etiqueta = new Etiqueta();
    $etiqueta->nombre = "Playo";
    $etiqueta->save();

    $etiqueta = new Etiqueta();
    $etiqueta->nombre = "Tornillos";
    $etiqueta->save();

    $etiqueta = new Etiqueta();
    $etiqueta->nombre = "Escaleras";
    $etiqueta->save();

    $etiqueta = new Etiqueta();
    $etiqueta->nombre = "Alicates";
    $etiqueta->save();

    Libro::truncate(); // Evita duplicar datos

    $libro = new Libro();
    $libro->titulo = "Primera orden";
    $libro->descripcion = "Esta orden se compro el miercoles";
    $libro->contenido = "Se compraron algunos articulos de primera mano";
    $libro->fecha = Carbon::now();
    $libro->categoria_id = 1;
    $libro->save();

    $libro->etiquetas()->attach([6, 1, 3, 5]); //Relacionar el libro a dos etiquetas


    $libro = new Libro();
    $libro->titulo = "Segunda orden";
    $libro->descripcion = "Esta orden se compro el jueves";
    $libro->contenido = "Se compraron algunos articulos para la construccion";
    $libro->fecha = Carbon::now();
    $libro->categoria_id = 1;
    $libro->save();

    $libro->etiquetas()->attach([2, 4, 6, 1]); //Relacionar el libro a dos etiquetas

    $libro = new Libro();
    $libro->titulo = "Tercera orden";
    $libro->descripcion = "Esta orden se compro el viernes";
    $libro->contenido = "Se compraron materiales electricos";
    $libro->fecha = Carbon::now();
    $libro->categoria_id = 2;
    $libro->save();

    $libro->etiquetas()->attach([1, 2, 3, 4, 5, 6]); //Relacionar el libro a dos etiquetas

    $libro = new Libro();
    $libro->titulo = "Cuarta orden";
    $libro->descripcion = "Esta orden se compro el sabado";
    $libro->contenido = "Se compraron materiales para la cocina";
    $libro->fecha = Carbon::now();
    $libro->categoria_id = 3;
    $libro->save();

    $libro->etiquetas()->attach([ 4, 5, 6]); //Relacionar el libro a dos etiquetas

  }
}
