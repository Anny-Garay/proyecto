<?php get_header();?>

    <section>
      <div class="banner">
        <div><img src="https://archivos-cms.cinecolombia.com/images/_aliases/exhibition_embed/0/8/7/5/25780-1-esl-CO/eec0cd20f0fa-imagen_trailer_1000x510.jpg" width="100%"  height="450"></div>
        <div><img src="https://lafrikileria.com/blog/wp-content/uploads/2018/04/IW.jpg" width="100%"  height="450"  alt=""></div>
        <div><img src="https://tumbaabierta.com/wp-content/uploads/2012/02/ira_de_titanes_wrath_titans_1920x1200_wallpaper_1.jpg"  width="100%"  height="450"></div>
      </div>
    
      <div>
      <h3 class="titulos">Peliculas Exitosas</h3>
    </div>
            <div class="multiple-items">
              <div><img src="https://s3.cine3.com/2020/06/titans2.jpg" width="280" height="350" alt=""></div>
              <div><img src="https://http2.mlstatic.com/D_NQ_NP_760751-MLM41788706380_052020-W.jpg" width="280" height="350" alt=""></div>
              <div><img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/480/public/media/image/2020/09/poster-batman-2021-2064381.jpg?itok=SEuYP8hx" width="280"  height="350" alt=""></div>
              <div><img src="https://www.ecured.cu/images/3/3b/Guerra-mundial-z-.jpg" width="280" height="350" alt=""></div>
              <div><img src="https://es.web.img2.acsta.net/medias/nmedia/18/80/30/27/19711024.jpg" width="280" height="350" alt=""></div>
              <div><img src="https://i.postimg.cc/g04V5wfH/as.jpg" width="280" height="350" alt=""></div>
           </div>
        
    
      
         
      <div>
      <h3 class="titulos">Proximamente</h3>
      </div>
      <div class="lazy">
      
        <div><img src="https://bonitanetworkmedia.s3.amazonaws.com/2022/05/r7UQvJcB-Avatar-El-Camino-del-Agua.jpg" width="280" height="350" alt=""></div>
        <div><img src="https://lumiere-a.akamaihd.net/v1/images/1_cb8bc30f.jpeg" width="280" height="350" alt=""></div>
        <div><img src="https://pm1.narvii.com/6103/5c2c235eccc34e929cebc01c2bb2100c02632a99_hq.jpg" width="280" height="350" alt=""></div>
        <div><img src="https://cdn.kinocheck.com/images/w350/rwb5votlfw.jpg"width="280" height="350" alt=""></div>
        <div><img src="http://pulpfictioncine.com/download/multimedia.normal.82f4a5fc14dc9844.7368617a616d2d706f737465722d315f6e6f726d616c2e6a7067.jpg" width="280" height="350" alt=""></div>
        <div><img src="https://s3-eu-west-1.amazonaws.com/abandomedia/db/foto/db_8531_49.jpg" width="280" height="350" alt=""></div>
      
      </div>
</section>
          
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script  src="https://code.jquery.com/jquery-2.2.4.min.js"integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>    
    
      $('.banner').slick({
        infinite: true,
        arrows: false,
        fade: true,
        slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      speed: 1000,
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
  
    <script>
    
      $('.multiple-items').slick({
        infinite: true,
        arrows: false,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 800,
        speed: 1000,
        responsive: [
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
        
    });
    
      $('.lazy').slick({
        arrows: false,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 800,
        speed: 1000,
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

<?php get_footer();?>




    