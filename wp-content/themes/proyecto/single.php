
<?php get_header(); ?>

   <section class="fondo">
    

        
   <div class="banner2" style="background-image: url(<?php the_post_thumbnail_url("large");?>);">

<div class="row">
    <div class="col-sm-5 text-right">
        <div class="video">
        <?php the_field ('video');?>
        </div>
     </div>
     
     <div class="col-sm-6">
    <h1 class="fondos"><?php the_title();?></h1>
    <p class="p1">2h-2m/Aventura-Comedia/2022</p>
    <div class="contenido"><?php the_content();?></div>
        <br>
        <button class="boton">COMENZAR A VER AHORA</button>
  
    </div>
    <div class="col-sm-1">
    </div>
</div>

<div class="container">

<h2 class="fondos2">Peliculas Recomendadas</h2>

<div class="multiple-items2">
    
    <div><a href="#"><img src="<?php the_field ('foto_1');?>" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="<?php the_field ('foto_2');?>" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="<?php the_field ('foto_3');?>" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="<?php the_field ('foto_4');?>" width="280" height="300"  alt=""></a></div>
    <div><a href="#"><img src="<?php the_field ('foto_5');?>" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="<?php the_field ('foto_6');?>"  width="280" height="300" alt=""></a></div>
    
</div>
  </div>
   </section>

<?php get_footer(); ?>


<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script  src="https://code.jquery.com/jquery-2.2.4.min.js"integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

   <script>
    $('.multiple-items2').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    speed: 1000,
    arrows: false,
    responsive: [
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });
   


   
</script>
