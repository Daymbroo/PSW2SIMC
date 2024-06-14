<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIE PANGSIT TG BATU 555</title>

    <!--Tailwind!-->
    <script src="https://cdn.tailwindcss.com" rel="stylesheet"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">


    <!--mystyle-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>

<body>

  

    <!--navbar start-->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Mie Pangsit <span>555</span></a>

        <div class="navbar-nav ">
    <a href="#home">Dashboard</a>
    <a href="#about">About Us</a>
    <a href="#menu">Menu</a>
    <a href="#contact">Contact</a>
    <a class="btn-open-popup" href="{{route('login')}}"> 
      Login!
    </a> 
    </div>
    
    </nav>


    <!--navbar end-->


  <!--Frontpg section start-->
  <section class="frontPg" id="home">
    <main class="content">
        <h1>Mie Pangsit <span>555</span></h1>
        <p class="txt">Indulge in the authentic taste of Indonesia with our signature dish, Mie Pangsit. Located conveniently in Pasir Putih, Batam from the heart and origins of Tanjung Batu, we bring you a culinary experience that combines traditional flavors with a modern twist.</p>
        <a href="#contact" class="cta">Buy Now!</a>
    </main>
  </section>
  <!--frontPg section end-->

  <!--About section start-->
  <section id="about" class="about">
    <h2><span> Tentang</span>  kami</h2>

    <div class="row">
        <div class="about-img">
            <img src="../assets/img/toko yatno.jpg" alt="Tentang Kami">
        </div>
        <div class="content">
            <h3>Why Mie Pangsit Tanjung Batu 555?</h3>
            <br>
            <br>
            <br>
            <p>Mie Pangsit Tanjung Batu 555 is a haven for noodle lovers in the area. Have been serving since 2009 and over years had perfected the art of noodle craft. </p>
            <br>
            <p>We offer a wide variety of delicious toppings, fresh ingredients - prepared from dawn, bouncy wontons with a flavorful blend of ground meat, and to top it all, we offer a warm atmosphere with our outstanding customer service. </p>
            <br>
            <p>At Mie Pangsit Tanjung Batu 555, we pride ourselves on delivering exceptional quality in every bowl of noodles we serve. Our noodles are carefully crafted using traditional techniques honed over years of experience. We meticulously select the freshest ingredients and toppings to ensure that each dish is bursting with flavor and freshness.</p>
            <br>
            <p>Experience the authentic flavors of Indonesia with every bite at Mie Pangsit Tanjung Batu 555. Our recipes are rooted in tradition, offering a taste of the rich culinary heritage of the region. Whether you're craving the classic flavors of our signature Mie Pangsit or exploring one of our innovative noodle creations, you'll find yourself immersed in a culinary journey unlike any other.</p>
            <br>
            <p> Beyond being a dining destination, Mie Pangsit Tanjung Batu 555 is a beloved community hub where friends and family gather to share delicious meals and create lasting memories. Our warm and welcoming atmosphere, coupled with our attentive customer service, ensures that every visit is a delightful experience. Join us and become a part of our extended family as we continue to celebrate the joy of noodles together.</p>
            

        </div>
    </div>
  </section>
  <!--About section end-->

  <!--Menu Section start-->
  <section id="menu" class="menu">
  <h2><span>Our</span> Menu</h2>
  <p class="OurMenuDesc">We Serve a large variety of noodles, authentic down to the very last ingredients and at affordable prices</p>

  <div class="container">
    <h3 class="text-center section-subheading"></h3>
    <h1 class="text-center section-heading">BEST SELLING!</h1>
  </div>
  <div class="container">
    <div class="swiper menu-slider">
      <div class="swiper-wrapper">
        <!-- Slide-start -->
        @foreach($products as $product)
        <div class="swiper-slide menu-slide">
          <div class="menu-slide-img">
            <img src="{{ $product->image }}" alt="menu">
          </div>
          <div class="menu-slide-content">
            <div class="menu-slide-content-bottom">
              <h2 class="food-name">
                {{ $product->name }}
              </h2>
              <h3 class="foodDesc">
                <span>{{ $product->Description }}</span>
                <div class="desc">
                </div>
              </h3>
            </div>
          </div>
        </div>
        @endforeach
        <!-- Slide-end -->

 </section>
  <!--Menu Section end -->

  <!-- Contact Section start-->
  <section id="contact" class="contact">
  <h2><span>Hubungi</span> kami</h2>

  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510642.1434484102!2d103.7729076540956!3d0.8378426466988654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9bce8c054ce05%3A0x3039d80b220cbb0!2sBatam%2C%20Kota%20Batam%2C%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1681136946709!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

    <form action="/submit" method="POST">
      @csrf
      <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" name="name" placeholder="Nama" required>
      </div>
      <div class="input-group">
          <i data-feather="mail"></i>
          <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" name="contact_information" placeholder="Contact information" required>
      </div>
      <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" name="message" placeholder="Messages" required>
      </div>
      <button type="submit" class="btn">Send Messages</button>
  </form>

  </div>
 </section>
  <!-- Contact Section end-->

  <!-- Footer Start-->
  <footer>

    <div class="links">
        <a href="#home">Dashboard</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
    </div>

  </footer>

  <!-- Footer End-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="assets/js/script.js"></script>

  <script src="assets/js/login.js"></script>

  <script> 
    function togglePopup() { 
        const overlay = document.getElementById('popupOverlay'); 
        overlay.classList.toggle('show'); 
    } 
</script> 

    </body>
</html>
