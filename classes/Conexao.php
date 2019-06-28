<?php



class Conexao{
	public static function pegarConexao(){
		/*Usando o arquivo de config.php*/

		$conexao = new PDO(DB_DRIVE. ':host=' . DB_HOSTNAME . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
		return $conexao;



		/*$conexao = new PDO('mysql:host=127.0.0.1;dbname=estoque', 'root', '');*/
		/*return $conexao;*/


	}

}