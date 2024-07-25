<?php 

class Conexion{

	public static function conectar(){

		$link = new PDO('mysql:host=localhost;dbname=dulceria_db', 'root', 'nyc.domcloud.co');

		$link->exec("set names utf8");

		return $link;

	}

}
