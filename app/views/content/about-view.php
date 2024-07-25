<?php
   require_once "./app/views/inc/head.php";
    require_once "./config/server.php";

    
    use app\controllers\misionController;
    $misionController=new misionController();
    $misionInfo= $misionController->traerMision();
?>

<link rel="stylesheet" href="<?php echo APP_URL; ?>/../app/views/css/style.css">

<div class="about login-container container">
  <div class="row">
    <div class="col">

    <div class="container">
    <div class="row">
<?php foreach ($misionInfo as $datos): { ?>  
           <h2>Misión</h1>
            <p>
                <?php echo $datos ['mision']?> 
            </p>
            <h2>Visión</h2>
            <p>
                <?php echo $datos ['vision']?>
            </p> 
            <div class="form-buttons">
        </div>
       </div>
        </div>
<?php } endforeach; ?>
</div>
</div>
</div>
</div>
</div>