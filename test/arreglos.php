<?php

$platos = ["ceviche","Arroz con pollo", "carapulcra", "Aji Gallina", "lomo saltado"];
echo $platos[0];
echo $platos[1];

$amigos = array("José", "Joel", "Lorenzo", "Cesar");
echo $amigos[1];

//Array Multi dimensional
$aplicaciones = [
  ["Photshop", "Corel Draw", "Premier", "Muse"],
  ["VSCode", "Xampp", "NetBeans", "Erwin", "Notepad++"],
  ["Excel", "SAP", "AutoCAD", "PowerBI", "Project"]

];
//Obtener VScode
echo $aplicaciones[1][0]; //1 = indice arreglo, 0 =índice de valor
//Obtener Muse
echo $aplicaciones[0][3];
//Obtener SAP
echo $aplicaciones[2][1];

//Hasta aquí, cualquiera de los arreglos anteriores, utiliza un INDICE(int)
// ARREGLOS ASOCIATIVOS....KEY=> VALUE
$datosPesonales = [
  "apellidos"     =>  "Llancari Vicerrel",
  "nombres"       =>  "Luis",
  "especialidad"  =>  "Ingeneria de Software con IA",
  "email"         =>  "mighel@mglal.com",
  "edad"          =>  19,
  "estaCasado"    =>  false,
  "pelculas"      =>  ["EndGame", "Pinocho", "IronMan"]
];

//Obtener la especialidad
echo $datosPersonales["especialidad"];
//Obtener la primera de tus peliculas favoritas
echo $datosPersonales["peliculas"][0];