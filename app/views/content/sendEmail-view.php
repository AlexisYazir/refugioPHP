<link rel="stylesheet" href="<?php echo APP_URL; ?>/../app/views/css/style.css">
<div class="login-container container">
        <form action="" method="POST" autocomplete="on">
          <h1>Recuperación de contraseña</h1> 
          <p>Escribe la direccion de correo electronico con la que tienes asociado el tidio </p> 
          <div class="form-text">Ingrese su correo.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></i></span>
            <input type="email" class="form-control" id="email" name="usuario_email" maxlength="70" placeholder="Correo" required>
          </div>
        <div class="form-buttons">
            <a href="<?php echo APP_URL; ?>recoverPswd/" class="btn btn-warning">Enviar</a>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </div>
            
        
        </form>
      </div>