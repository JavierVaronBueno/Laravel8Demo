@extends('layouts.plantilla')

@section('title','Curso ' .$id.' '.$categoria)

@section('content')
    <h1><?php
        if($categoria){
            echo "Bienvenidos al curso: $id, de la categoria $categoria";
        }else{
            echo "Bienvenidos al curso: $id";
        } 
    ?></h1>
@endsection