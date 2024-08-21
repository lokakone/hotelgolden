<?php

class ControladorInicio{

	/*=============================================
				SUMAR VENTAS
	=============================================*/

	static public function ctrSumarVentas(){

		$tabla = "reservas";

		$respuesta = ModeloInicio::mdlSumarVentas($tabla);
		
		return $respuesta;

	}	

		

	/*=============================================
	TRAER FOTO HABITACIÓN
	=============================================*/

	static public function ctrTraerFotoHabitacion($valor){

		$tabla1 = "reservas";
		$tabla2 = "habitaciones";

		$respuesta = ModeloInicio::mdlTraerFotoHabitacion($tabla1, $tabla2, $valor);
		
		return $respuesta;

	}	

	


}