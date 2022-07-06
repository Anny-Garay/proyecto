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