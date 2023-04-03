<?php 

//Incorporar al modelo
require_once "../models/curso.php";

//Verificar si existe operacion en curso
// GET - POST - REQUEST

if (isset($_POST['operacion'])){

  //Instancia de la clase curso
  $curso = new Curso();

  //Identificamos la operacion: listar, insertar, eliminar, buscar, etc.
  if($_POST['operacion']=='listar'){

    //Utilizaremos el metodo definido de la clase
    $resultado = $curso->listarCursos();

    //Enviamos el resultado a la vista como JSON
    echo json_encode($resultado);

  }

}
