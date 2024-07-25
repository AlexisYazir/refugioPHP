<?php
   require_once "./app/views/inc/head.php";
    require_once "./config/server.php";

    
    use app\controllers\sliderController;
    $sliderController=new sliderController();
    $imagenesSlider= $sliderController->seleccionarImgSlider();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bulma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bulma.min.css"> 
    
    <style>    
       table.dataTable thead, table.dataTable tfoot {
           background-color: #f8efdc;                  
       }
       .table thead th, .table tfoot th{ 
           color: #black;
        }
    </style>
    
  </head>
  <body>
  
<div class="container is-fullhd">

<article class="tile is-child notification is-info">
   <p class="title">Tabla de Datos Slider</p>
</article>
<table id="example" class="table is-striped is-hoverable" style="width:100%">
    <thead>
    
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($imagenesSlider as $imagen): { ?>
        <tr>
            <td><?php echo $imagen ['idslider']?></td>
            <td><img width="380px" height="380px" src="<?php echo $imagen ['imagen']?>"></td>
            <td><?php echo $imagen ['nom']?></td>
            <td><?php echo $imagen ['estatus']?></td>
            <td>Editar | Eliminar</td>
        </tr>
        <?php } endforeach; ?>
        
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>


</div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bulma.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable({
        lengthMenu: [[2,4,8,10],[2,4,8,10]],
        
        
    });
} );
</script>

  </body>
</html>