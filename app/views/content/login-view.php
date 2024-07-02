<div class="login-container container login">
        <form action="" method="POST" autocomplete="on">
          <h1>Inicio de sesión</h1> 
          <div class="form-text">Ingrese su nombre de usuario.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></i></span>
            <input type="text" class="form-control" id="username" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" placeholder="Correo" required>
          </div> 
          <div class="form-text">Ingrese su contraseña.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-lock "></i></span>
            <input type="password" class="form-control" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="30" placeholder="Contraseña" required>
          </div> 
          <div class="form-links">
            <a href="<?php echo APP_URL; ?>sendEmail/">Recuperar Contraseña</a>
        </div>
        <div class="form-buttons">
            <button type="submit" class="btn btn-warning register">Iniciar sesión</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </div>
            
        
        </form>
      </div> 