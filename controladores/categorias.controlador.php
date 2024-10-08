<?php 

class ControladorCategorias{

	/*=============================================
	CREAR CATEGORÍAS
	=============================================*/

	public static function ctrCrearCategoria(){

		if (isset($_POST["nuevaCategoria"])) {
				
			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])) {
				
				$tabla = "categorias";
				$datos = $_POST["nuevaCategoria"];

				$respuesta = ModeloCategorias::mdlIngresarCategoria($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

			 		swal({
			 		type: "success",
			 		title: "La categoría ha sido guardada correctamente",
			 		showConfirmButton: true,
			 		confirmButtonText: "Cerrar",
			 		closeOnConfirm: false,
			 		}).then((result)=>{
			 			if(result.value){
			 				window.location = "categorias";
			 				}
				 		});
				 	</script>';

				}

			}else{

				echo '<script>

			 		swal({
			 		type: "error",
			 		title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
			 		showConfirmButton: true,
			 		confirmButtonText: "Cerrar",
			 		closeOnConfirm: false,
			 		}).then((result)=>{
			 			if(result.value){
			 				window.location = "usuarios";
			 				}
				 		});
				 	</script>';

			}

		}

	}

	/*========================
	MOSTRAR CATEGORÍAS
	========================*/
	
	public static function ctrMostrarCategorias($item, $valor){

		$tabla = "categorias";

		$respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR CATEGORIA
	=============================================*/

	public static function ctrEditarCategoria(){

		if(isset($_POST["editarCategoria"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"])){

				$tabla = "categorias";

				$datos = array("categoria"=>$_POST["editarCategoria"],
							   "id"=>$_POST["idCategoria"]);

				$respuesta = ModeloCategorias::mdlEditarCategoria($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La categoría ha sido cambiada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "categorias";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "categorias";

							}
						})

			  	</script>';

			}

		}

	}

	/*========================
	BORRAR CATEGORIA
	========================*/
	
	public static function ctrBorrarCategoria(){

		if (isset($_GET["idCategoria"])){
			
			$tabla = "categorias";
			$datos = $_GET["idCategoria"];

			$respuesta = ModeloCategorias::mdlBorrarCategoria($tabla, $datos);

			if ($respuesta =="ok") {
				
				echo'<script>

					swal({
						  type: "success",
						  title: "La categoría ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "categorias";

									}
								})

					</script>';

			}
		}
	}
}