<footer class="pie2">
    <div class="row">
      <div class="col-3">   
          <ul class = "explorar">
            <h2 class="pieza">RANKING</h2>
            <li>THOR RAGNAROK</li>
            <li>X-MEN</li>
          </ul>
      </div>
      <div class="col-3">
            <ul class = "empezar">
              <h2 class="pieza">EMPIECE AHORA</h2>
          
            <li>Iniciar Sesion</li>
            <li>Suscribirse</li>
            </ul>
       </div>
      <div class="col-3">
              <ul class="ayuda">
             <h2 class="pieza">AYUDA</h2>
            <li>Preguntas Frecuentes</li>
            <li>Contactenos</li>
            <li>Dispositivos Admitidos</li>
            </ul>
      </div>
        <div class="col-3">
            <ul class="compañia">
              <h2 class="pieza">COMPAÑIA</h2>
              <li>Publicidad</li>
              <li>Terminos y Condiciones</li>
            </ul>
        </div>
          
    </div>
 
           
</footer>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
    $('.your-class1').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
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

    $('.your-class2').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('#flecha-izquierda2'),
      nextArrow: $('#flecha-derecha2'),
      responsive: [
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });


    $('.your-class3').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('#flecha-izquierda3'),
      nextArrow: $('#flecha-derecha3'),
      responsive: [
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });
  })

  </script>
</body>
</html>