<?php 

class Conexion{

	public static function conectar(){

		$link = new PDO('mysql:host=localhost;dbname=dulceria_db', 'dulceria', 'DP--5jga(81WAxq9A8');

		$link->exec("set names utf8");

		return $link;

	}

}
