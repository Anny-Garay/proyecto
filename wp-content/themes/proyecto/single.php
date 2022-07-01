<?php get_header();?>

   <section class="fondo">
    

        
   <div class="banner" style="background-image: url(https://www.cinemascomics.com/wp-content/uploads/2022/02/encanto.jpg);">

<div class="row">
    <div class="col-sm-5 text-right">
        <iframe class="video" width="280" height="450" src="https://www.youtube.com/embed/SAH_W9q_brE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
     
     <div class="col-sm-6">
    <h1>Encanto</h1>
    <p class="p1">1h-49m/Infantil-Musica/2021</p>
        <p class="contenido">Una joven colombiana puede ser
             la última esperanza para su familia, cuando descubre 
             que la magia que rodea a Encanto, un lugar encantado 
             que bendice a los niños con dones únicos, se encuentra 
             en serio peligro.
        <br>
        <button class="boton">COMENZAR A VER AHORA</button>
    </p> 
        
    </div>
    <div class="col-sm-1">
    </div>
</div>

<div class="container">

<h2>Peliculas Recomendadas</h2>

<div class="multiple-items">
    
    <div><a href="#"><img src="img/3.webp" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="img/17.webp" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="img/16.webp" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="img/12.jpg" width="280" height="300"  alt=""></a></div>
    <div><a href="#"><img src="img/10.webp" width="280" height="300" alt=""></a></div>
    <div><a href="#"><img src="img/7.jpg"  width="280" height="300" alt=""></a></div>
    
</div>
  </div>
   </section>

   <footer>
   </footer>


   <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

   <script>
    $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    speed: 1000,
    arrows: false,
    prevArrow: $('#flecha-izquierda1'),
    nextArrow: $('#flecha-derecha1'),
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

</body>
</html>