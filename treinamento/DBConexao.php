<?php

abstract class DBConexao{
	
	const USUARIO = "root";
	const SENHA = "";
	
	private static $instancia;
	
	public static function getInstancia(){
		if(self::$instancia == null){
			$stringConexao = "mysql:host=localhost;port=3306;dbname=treinamento";
			self::$instancia = new PDO($stringConexao, self::USUARIO, self::SENHA);
			self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		return self::$instancia;
	}
}
