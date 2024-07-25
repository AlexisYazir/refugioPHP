<?php
	
	require_once "../../config/app.php";
	require_once "../views/inc/session_start.php";
	require_once "../../autoload.php";
	
	use app\controllers\userController;
	use app\controllers\sliderController;

	if(isset($_POST['modulo_usuario'])){

		$insUsuario = new userController();

		if($_POST['modulo_usuario']=="registrar"){
			echo $insUsuario->registrarUsuarioControlador();
		}
		
	}
	else if(isset($_POST['modulo_imagenes'])){
		$insSlider = new sliderController();
		if($_POST['modulo_imagenes']=="imagenes"){
			echo $insSlider->guardarImagenesControlador();
		}
		
	}else{
		session_destroy();
		header("Location: ".APP_URL."login/");
	}