<?php 

class Conexion{

	public static function conectar(){

		$link = new PDO('mysql:host=localhost;port=3306;dbname=dulceria_db', 'dulceria', 'nyc.domcloud.co dulceria_db');

		$link->exec("set names utf8");

		return $link;

	}

}
