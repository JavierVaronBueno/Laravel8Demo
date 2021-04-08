<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    #Convencion para llamara la pagina de inicio
    public function index(){
        return view('cursos.index');
    }

    #Convencion para llamara la pagina de formulario o crear un curso
    public function create(){
        return view('cursos.create');
    }
    #Convencion para llamara la pagina de mostrar un curso
    public function show($id,$categoria = null){
        return view('cursos.show',['id'=> $id, 'categoria' => $categoria]);
    }
}
