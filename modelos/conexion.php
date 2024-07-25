<?php 

class Conexion{

	public static function conectar(){

		$link = new PDO('mysql:host=localhost;port=3308;dbname=pos', 'root', '');

		$link->exec("set names utf8");

		return $link;

	}

}