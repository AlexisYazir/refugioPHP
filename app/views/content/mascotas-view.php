<?php
   require_once "./app/views/inc/head.php";
    require_once "./config/server.php";

    
    use app\controllers\mascotasController;
    $mascotasController=new mascotasController();
    $imgMascotas= $mascotasController->traerMascotas();
?>

<link rel="stylesheet" href="<?php echo APP_URL; ?>/../app/views/css/style.css">



<div class="about container">
  <div class="row">
<?php foreach ($imgMascotas as $imagen): { ?>
            
    <div class="card login-container" style="width: 18rem;">
  <img src="<?php echo $imagen ['url_img']?>" class="card-img-top" alt="mascotas">
  <div class="card-body">
    <h5 class="card-title"><?php echo $imagen ['nombre']?></h5>
    <p class="card-text"><?php echo $imagen ['descripcion']?></p>
    <a href="#" class="btn btn-primary">Ver más..</a>
  </div>
</div>
<?php } endforeach; ?>
</div>
</div>










<!--<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>-->



            


