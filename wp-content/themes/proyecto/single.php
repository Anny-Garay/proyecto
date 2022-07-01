<?php get_header(); ?>

   <section class="fondo">
    

        
   <div class="banner2" style="background-image: url(https://cdn.mos.cms.futurecdn.net/oUNqiP3s3T9aYPqFUgZaWk.jpg);">

<div class="row">
    <div class="col-sm-5 text-right">
    <iframe class="video" width="280" height="450" src="https://www.youtube.com/embed/YlkN8K2oOMo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    
    <div><a href="#"><img src="<?php bloginfo("template_url");?>img/3.webp" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="<?php bloginfo("template_url");?>img/17.webp" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="<?php bloginfo("template_url");?>img/16.webp" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="<?php bloginfo("template_url");?>img/12.jpg" width="280" height="300"  alt=""></a></div>
    <div><a href="#"><img src="<?php bloginfo("template_url");?>img/10.webp" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="<?php bloginfo("template_url");?>img/7.jpg"  width="280" height="300" alt=""></a></div>
    
</div>
  </div>
   </section>

<?php get_footer(); ?>