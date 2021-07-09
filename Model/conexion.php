<?php 

	class Conexion{
		public function conectar(){
			try {
				$conexion = new PDO('mysql:host=e764qqay0xlsc4cz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=gu0njl1a8lkvxvq2','g4ne2uki5p1rcd01','ruunmrcm40g76949');
				$conexion->exec('SET CHARACTER SET utf8');
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				return $conexion;
			} catch (Exception $e) {
				echo "ERROR DE CONEXION". $e->getMessage. $e->getLine;
			}
		}

		
	}
