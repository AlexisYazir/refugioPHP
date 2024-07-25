<?php
    namespace app\controllers;
    use app\models\mainModel;

    class sliderController extends mainModel {
        public function guardarImagenesControlador(){
			$nombreimg=$this->limpiarCadena($_POST['imagen_nombre']);

            # Verificando campos obligatorios, si los campos estan vacios entonces mostrara una alerta #
		    if($nombreimg==""){
		    	$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"No has llenado todos los campos que son obligatorios",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
		    }

			# Directorio de imagenes #
    		$img_dir="../views/fotos/";

            # Comprobar si se selecciono una imagen #
    		if($_FILES['imagen_slider']['name']!="" && $_FILES['imagen_slider']['size']>0){

    			# Creando directorio #
		        if(!file_exists($img_dir)){
		            if(!mkdir($img_dir,0777)){
		            	$alerta=[
							"tipo"=>"simple",
							"titulo"=>"Ocurrió un error inesperado",
							"texto"=>"Error al crear el directorio",
							"icono"=>"error"
						];
						return json_encode($alerta);
		                exit();
		            } 
		        }

		        # Verificando formato de imagenes #
		        if(mime_content_type($_FILES['imagen_slider']['tmp_name'])!="image/jpeg" && mime_content_type($_FILES['imagen_slider']['tmp_name'])!="image/png"){
		        	$alerta=[
						"tipo"=>"simple",
						"titulo"=>"Ocurrió un error inesperado",
						"texto"=>"La imagen que ha seleccionado es de un formato no permitido",
						"icono"=>"error"
					];
					return json_encode($alerta);
		            exit();
		        }

		        # Verificando peso de imagen #
		        if(($_FILES['imagen_slider']['size']/1024)>5120){
		        	$alerta=[
						"tipo"=>"simple",
						"titulo"=>"Ocurrió un error inesperado",
						"texto"=>"La imagen que ha seleccionado supera el peso permitido",
						"icono"=>"error"
					];
					return json_encode($alerta);
		            exit();
		        }

		        # Nombre de la foto #
		        $foto=str_ireplace(" ","_",$nombreimg);
		        $foto=$foto."_".rand(0,100);

		        # Extension de la imagen #
		        switch(mime_content_type($_FILES['imagen_slider']['tmp_name'])){
		            case 'image/jpeg':
		                $foto=$foto.".jpg";
		            break;
		            case 'image/png':
		                $foto=$foto.".png";
		            break;
		        }

		        chmod($img_dir,0777);

		        # Moviendo imagen al directorio #
		        if(!move_uploaded_file($_FILES['imagen_slider']['tmp_name'],$img_dir.$foto)){
		        	$alerta=[
						"tipo"=>"simple",
						"titulo"=>"Ocurrió un error inesperado",
						"texto"=>"No podemos subir la imagen al sistema en este momento",
						"icono"=>"error"
					];
					return json_encode($alerta);
		            exit();
		        }

    		}else{
    			$foto="";
    		}

			$usuario_datos_reg=[
				[
					"campo_nombre"=>"imagen",
					"campo_marcador"=>":Imgagen",
					"campo_valor"=>$foto
				],
				[
					"campo_nombre"=>"nom",
					"campo_marcador"=>":NombreImg",
					"campo_valor"=>$nombreimg
				]
			];


			$guardaImagenes=$this->ejecutarConsulta("INSERT INTO tblslider(imagen,nom,estatus)
			VALUES ('$foto','$nombreimg', 1)");

			if($guardaImagenes->rowCount()==1){
				$alerta=[
					"tipo"=>"limpiar",
					"titulo"=>"Imagen guardada",
					"texto"=>"La imagen ".$nombreimg." se guardo con exito",
					"icono"=>"success"
				];
			}else{
				
				$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"No se pudo guardar la imagen, por favor intente nuevamente",
					"icono"=>"error"
				];
			}

				return json_encode($alerta);
		}
    
   }
?>