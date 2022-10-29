<?php
# se recomienda empesar el nombre de la clase con 
#mayusculas
class Automovil{
#propiedades: son las caracteristicas que tiene
#un objeto por ejemplo "public" o "private"
#la "private" solo se peude usar dentro de una 
#misma clase 

public $marca;
public $modelo;
public $placa;

#Método
#es el algoritmo asociado a un objeto que indica la capacidad
#de lo que éste puede hacer.
# la unica diferencia entre metodo y funcion es que
#llamamos metodo alas funciones de una clase
#en la poo, mientras en funciones  a los algoritmos 
#de la programacion estructurada.

public function enseña(){
    echo "<p>Hola soy un $this->marca,modelo $this->modelo, placa $this->placa</p>"; 
# los THIS puede represetar cualquier popiedad de public

}
}
#Objeto
#una entidad provista de metodos o mensajes 
#los cuales responden propiedades con valores concretos
#para asignar un objeto se representa con "new" lo cual significa 
#que va a crear un objeto que deriva de la clase actual ejemplo:

$a = new Automovil();
$a -> marca = "nissan";
$a -> modelo = "san";
$a -> placa = "123";
$a -> enseña();

$b = new Automovil ();
$b -> marca = "san";
$b -> modelo = "nan";
$b -> placa = "321";
$b -> enseña();
#principios de la poo que se cumplen en este ejemplo:
#abtraccion: nuevos tipos de datos (el que tu quieras, lo creas ejemplo linea 28)
#encapsulacion: organizar el codigo en grupos logicos son las "clases" y segunda
#clase los objetos del numero 34
#olcultamiento: ocultar detalles de implementacion
#y exponer solo los dertalles  que sean necesarios
?>