<link rel="stylesheet" href="<?php echo APP_URL; ?>/../app/views/css/style.css">
<div class="login-container container">
        <form class="" action="<?php echo APP_URL; ?>app/ajax/usuarioAjax.php" method="POST" autocomplete="on" enctype="multipart/form-data">
          <input type="hidden" name="modulo_imagenes" value="imagenes">

          <h1>Agregar imagenes al Slider</h1>  
          <div class="form-text">Ingrese el nombre de la imagen.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-pencil-alt"></i></span>
            <input type="text" class="form-control" id="username" name="imagen_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" placeholder="Nombre" required>
          </div> 
          <div class="columns">
		  	<div class="column">
				<div class="file has-name is-boxed">
					<label class="file-label">
						<input class="" type="file" name="imagen_slider" accept=".jpg, .png, .jpeg" required >
						<span class="">JPG, JPEG, PNG. (MAX 5MB)</span>
					</label>
				</div>
		  	</div>
		</div>
        <div class="form-buttons">
            <button type="submit" class="btn btn-warning register">Guardar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </div>
            
        
        </form>
      </div> 