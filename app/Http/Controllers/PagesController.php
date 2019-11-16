<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class PagesController extends Controller
{
  public function inicio()
  {
    $libros = Libro::all();
    return view('welcome', compact('libros'));
  }
  public function detalle($id)
  {
    $libro = Libro::findOrFail($id);

    return view('detalle', compact('libro'));
  }
}
