<?php get_header();?>

<section class="container">
    <h1>PELICULAS</h1>
    <h3>POPULARES</h3>
<div class="flechas">
  <button role="button" id="flecha-izquierda1" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
  <button role="button" id="flecha-derecha1" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
</div>
    <div class="your-class1">
      
      <div><a href="#" style="background-image:url(<?php the_field ('populares_1');?>)"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('populares_2');?>)"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('populares_3');?>"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('populares_4');?>"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('populares_5');?>"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('populares_6');?>"></a></div>


    </div>
</div>
    </section>



<section class="container">
    <h3>ACCIÓN</h3>
    <div class="flechas2">
    <button role="button" id="flecha-izquierda2" class="flecha-izquierda2"><i class="fas fa-angle-left"></i></button>
  <button role="button" id="flecha-derecha2" class="flecha-derecha2"><i class="fas fa-angle-right"></i></button>
      <div class="your-class2">
      <div><a href="#" style="background-image:url(<?php the_field ('accion_1');?>)"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('accion_2');?>)"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('accion_3');?>"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('accion_4');?>"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('accion_5');?>"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('accion_6');?>"></a></div>

        </a></div>
     </div>
 </div>
    </section>


<section class="container">
    <h3>COMEDIA</h3>
    <div class="flechas3">
    <button role="button" id="flecha-izquierda3" class="flecha-izquierda3"><i class="fas fa-angle-left"></i></button>
  <button role="button" id="flecha-derecha3" class="flecha-derecha3"><i class="fas fa-angle-right"></i></button>
      <div class="your-class3">
      <div><a href="#" style="background-image:url(<?php the_field ('comedia_1');?>)"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('comedia_2');?>)"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('comedia_3');?>"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('comedia_4');?>"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('comedia_5');?>"></a></div>
      <div><a href="#" style="background-image:url(<?php the_field ('comedia_6');?>"></a></div>

   </div>
  </div> 
</section>

<?php get_footer();?>