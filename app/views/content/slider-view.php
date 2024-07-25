<?php
   require_once "./app/views/inc/head.php";
    require_once "./config/server.php";

    
    use app\controllers\sliderController;
    $sliderController=new sliderController();
    $imagenesSlider= $sliderController->seleccionarImgSlider();
?>

<section class="middle">
            
            <div class="slider-frame">
            <ul>
                <?php foreach ($imagenesSlider as $imagen): { ?>
                <li><img width="380px" height="380px" src="<?php echo $imagen ['imagen']?>"></li>
                <?php } endforeach; ?>
            </div>
</section>
<!--<main>
            <section class="cont">

                <div class="slider-frame">
                    <ul>
                        <li><img src="<?php echo APP_URL; ?>app/views/img/perritos1.jpg" alt=""></li>
                        <li><img src="<?php echo APP_URL; ?>app/views/img/perritos2.jpg" alt=""></li>
                        <li><img src="<?php echo APP_URL; ?>app/views/img/perritos3.jpg" alt=""></li>
                        <li><img src="<?php echo APP_URL; ?>app/views/img/perritos4.jpg" alt=""></li>
                    </ul>
                </div>
                
            </section>
</main>-->