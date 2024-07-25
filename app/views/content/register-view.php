<link rel="stylesheet" href="<?php echo APP_URL; ?>/../app/views/css/style.css">
<div class="login-container container">
        <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/usuarioAjax.php" method="POST" autocomplete="on" enctype="multipart/form-data">
          <input type="hidden" name="modulo_usuario" value="registrar">

          <h1>Registro de usuario</h1>  
            <div class="form-text">Ingrese su nombre.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" class="form-control" id="username" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" placeholder="Nombre" required>
          </div> 
          <div class="form-text">Ingrese su apellido.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" class="form-control" id="username_a" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" placeholder="Apellido" required>
          </div>
          <div class="form-text">Ingrese su nombre de usuario.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" class="form-control" id="username_u" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" placeholder="Nombre usuario" required>
          </div>
          <div class="form-text">Ingrese un correo valido.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></i></span>
            <input type="email" class="form-control" id="email" name="usuario_email" maxlength="70" placeholder="Correo">
          </div> 
          <div class="form-text">Ingrese una contraseña segura.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-lock "></i></span>
            <input type="password" class="form-control" name="usuario_clave_1" placeholder="Contraseña" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
          </div> 
          <div class="form-text">Confirme su contraseña.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-lock "></i></span>
            <input type="password" class="form-control" name="usuario_clave_2" placeholder="Contraseña" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
          </div> 
          <div class="columns">
		  	<div class="column">
				<div class="file has-name is-boxed">
					<label class="file-label">
						<input class="file-input" type="file" name="usuario_foto" accept=".jpg, .png, .jpeg" >
						<span class="file-cta">
							<span class="file-label">
								Seleccione una foto
							</span>
						</span>
						<span class="file-name">JPG, JPEG, PNG. (MAX 5MB)</span>
					</label>
				</div>
		  	</div>
		</div>
        <div class="form-buttons">
            <button type="submit" class="btn btn-warning register">Registrarse</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </div>
            
        
        </form>
      </div> 