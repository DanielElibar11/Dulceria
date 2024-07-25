<?php 

class Conexion{

	public static function conectar(){

		$link = new PDO('mysql:host=localhost;dbname=dulceria_db', 'dulceria', '2jF-)FimX3x5Pq11D-');

		$link->exec("set names utf8");

		return $link;

	}

}
