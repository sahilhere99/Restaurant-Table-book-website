
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <title>Grilli - Amazing & Delicious Food</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee">

 
  
  <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  
</head>
  
  <link rel="stylesheet" href="style.css">

 
  
  <link rel="preload" as="image" href="hero-slider-1.jpg">
  <link rel="preload" as="image" href="hero-slider-2.jpg">
  <link rel="preload" as="image" href="hero-slider-3.jpg">

</head>
<body>

<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<p style='color: green;'>Reservation made successfully!</p>";
}
?>




    <body id="top">




<div class="preload" data-preaload>
  <div class="circle"></div>
  <p class="text grilli">Grilli</p>
</div>







<div class="topbar">
  <div class="container">

    <address class="topbar-item">
      <div class="icon">
        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
      </div>

      <span class="span">
        Restaurant St, Delicious City, London 9578, UK
      </span>
    </address>

    <div class="separator"></div>

    <div class="topbar-item item-2">
      <div class="icon">
        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
      </div>

      <span class="span">Daily : 8.00 am to 10.00 pm</span>
    </div>

    <a href="tel:+11234567890" class="topbar-item link">
      <div class="icon">
        <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
      </div>

      <span class="span">+1 123 456 7890</span>
    </a>

    <div class="separator"></div>

    <a href="mailto:booking@restaurant.com" class="topbar-item link">
      <div class="icon">
        <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
      </div>

      <span class="span">booking@restaurant.com</span>
    </a>

  </div>
</div>







<header class="header" data-header>
  <div class="container">

    <a href="#" class="logo">
      <img src="logo.svg" width="160" height="50" alt="Grilli - Home">
    </a>

    <nav class="navbar" data-navbar>

      <button class="close-btn" aria-label="close menu" data-nav-toggler>
        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
      </button>

      <a href="#" class="logo">
        <img src="logo.svg" width="160" height="50" alt="Grilli - Home">
      </a>

      <ul class="navbar-list">

        <li class="navbar-item">
          <a href="#home" class="navbar-link hover-underline active">
            <div class="separator"></div>

            <span class="span">Home</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="#menu" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span">Menus</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="#about" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span">About Us</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="#" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span">Our Chefs</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="#" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span">Contact</span>
          </a>
        </li>

      </ul>

      <div class="text-center">
        <p class="headline-1 navbar-title">Visit Us</p>

        <address class="body-4">
          Restaurant St, Delicious City, <br>
          London 9578, UK
        </address>

        <p class="body-4 navbar-text">Open: 9.30 am - 2.30pm</p>

        <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">booking@grilli.com</a>

        <div class="separator"></div>

        <p class="contact-label">Booking Request</p>

        <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
          +88-123-123456
        </a>
      </div>

    </nav>

    <a href="#container" class="btn btn-secondary">
      <span class="text text-1">Find A Table</span>

      <span class="text text-2" aria-hidden="true">Find A Table</span>
    </a>

    <button style="color: rgb(218, 202, 109); border:none; background-color: black ;" class="nav-open-btn" aria-label="open menu" data-nav-toggler>
      <span class=""> <a href="#menu">Menu</a></span>
      <span class=""> <a href="#container">Book Table</a></span>
      <span class=""> <a href="#contact">Contact</a></span>
      <span class=""> <a href="#about">About us</a></span>

    </button>

    <div class="overlay" data-nav-toggler data-overlay></div>

  </div>
</header>





<main>
  <article>

   
    

    <section class="hero text-center" aria-label="home" id="home">

      <ul class="hero-slider" data-hero-slider>

        <li class="slider-item active" data-hero-slider-item>

          <div class="slider-bg">
            <img src="hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
          </div>

          <p class="label-2 section-subtitle slider-reveal">Tradational & Hygine</p>

          <h1 class="display-1 hero-title slider-reveal">
            For the love of <br>
            delicious food
          </h1>

          <p class="body-2 hero-text slider-reveal">
            Come with family & feel the joy of delicious food.
            
          </p>

          <a href="#" class="btn btn-primary slider-reveal">
            <span class="text text-1">View Our Menu</span>

            <span class="text text-2" aria-hidden="true">View Our Menu</span>
          </a>

        </li>

        <li class="slider-item" data-hero-slider-item>

          <div class="slider-bg">
            <img src="hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
          </div>

          <p class="label-2 section-subtitle slider-reveal">delightful experience</p>

          <h1 class="display-1 hero-title slider-reveal">
            Flavors Inspired by <br>
            the Seasons
          </h1>

          <p class="body-2 hero-text slider-reveal">
            Come with family & feel the joy of delicious food.
            
          </p>

          <a href="#" class="btn btn-primary slider-reveal">
            <span class="text text-1">View Our Menu</span>

            <span class="text text-2" aria-hidden="true">View Our Menu</span>
          </a>

        </li>

        <li class="slider-item" data-hero-slider-item>

          <div class="slider-bg">
            <img src="hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
          </div>

          <p class="label-2 section-subtitle slider-reveal">amazing & delicious</p>

          <h1 class="display-1 hero-title slider-reveal">
            Where every flavor <br>
            tells a story
          </h1>

          <p class="body-2 hero-text slider-reveal">
            Come with family & feel the joy of delicious food.
          </p>

          <a href="#" class="btn btn-primary slider-reveal">
            <span class="text text-1">View Our Menu</span>

            <span class="text text-2" aria-hidden="true">View Our Menu</span>
          </a>

        </li>

      </ul>

      <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
        <ion-icon name="chevron-back"></ion-icon>
      </button>

      <button class="slider-btn next" aria-label="slide to next" data-next-btn>
        <ion-icon name="chevron-forward"></ion-icon>
      </button>

      <a href="#container" class="hero-btn has-after">
        <img src="hero-icon.png" width="48" height="48" alt="booking icon">

        <span class="label-2 text-center span">Book A Table</span>
      </a>

    </section>





    
  

    <section class="section service bg-black-10 text-center" aria-label="service">
      <div class="container">

        <p class="section-subtitle label-2">Flavors For Royalty</p>

        <h2 class="headline-1 section-title">We Offer Top Notch</h2>

        <p class="section-text">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industrys
          standard dummy text ever.
        </p>

        <ul class="grid-list">

          <li>
            <div class="service-card">

              <a href="#" class="has-before hover:shine">
                <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                  <img src="service-1.jpg" width="285" height="336" loading="lazy" alt="Breakfast"
                    class="img-cover">
                </figure>
              </a>

              <div class="card-content">

                <h3 class="title-4 card-title">
                  <a href="#">Breakfast</a>
                </h3>

                <a href="#" class="btn-text hover-underline label-2">View Menu</a>

              </div>

            </div>
          </li>

          <li>
            <div class="service-card">

              <a href="#" class="has-before hover:shine">
                <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                  <img src="service-2.jpg" width="285" height="336" loading="lazy" alt="Appetizers"
                    class="img-cover">
                </figure>
              </a>

              <div class="card-content">

                <h3 class="title-4 card-title">
                  <a href="#">Appetizers</a>
                </h3>

                <a href="#" class="btn-text hover-underline label-2">View Menu</a>

              </div>

            </div>
          </li>

          <li>
            <div class="service-card">

              <a href="#" class="has-before hover:shine">
                <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                  <img src="service-3.jpg" width="285" height="336" loading="lazy" alt="Drinks"
                    class="img-cover">
                </figure>
              </a>

              <div class="card-content">

                <h3 class="title-4 card-title">
                  <a href="#">Drinks</a>
                </h3>

                <a href="#" class="btn-text hover-underline label-2">View Menu</a>

              </div>

            </div>
          </li>

        </ul>

        <img src="shape-1.png" width="246" height="412" loading="lazy" alt="shape"
          class="shape shape-1 move-anim">
        <img src="shape-2.png" width="343" height="345" loading="lazy" alt="shape"
          class="shape shape-2 move-anim">

      </div>
    </section>





    
    

    <section class="section about text-center" aria-labelledby="about-label" id="about">
      <div class="container">

        <div class="about-content">

          <p class="label-2 section-subtitle" id="about-label">Our Story</p>

          <h2 class="headline-1 section-title">Every Fla vor Tells a Story</h2>

          <p class="section-text">
            Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the
            industrys standard dummy text ever since the when an unknown printer took a galley of type and scrambled
            it to make a type specimen book It has survived not only five centuries, but also the leap into.
          </p>

          <div class="contact-label">Book Through Call</div>

          <a href="tel:+804001234567" class="body-1 contact-number hover-underline">+80 (400) 123 4567</a>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Read More</span>

            <span class="text text-2" aria-hidden="true">Read More</span>
          </a>

        </div>

        <figure class="about-banner">

          <img src="about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
            class="w-100" data-parallax-item data-parallax-speed="1">

          <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
            <img src="about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
              class="w-100">
          </div>

          <div class="abs-img abs-img-2 has-before">
            <img src="badge-2.png" width="133" height="134" loading="lazy" alt="">
          </div>

        </figure>

        <img src="shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

      </div>
    </section>





   
    <section class="special-dish text-center" aria-labelledby="dish-label">

      <div class="special-dish-banner">
        <img src="special-dish-banner.jpg" width="940" height="900" loading="lazy" alt="special dish"
          class="img-cover">
      </div>

      <div class="special-dish-content bg-black-10">
        <div class="container">

          <img src="badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

          <p class="section-subtitle label-2">Special Dish</p>

          <h2 class="headline-1 section-title">Lobster Tortellini</h2>

          <p class="section-text">
            Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the
            industrys standard dummy text ever since the when an unknown printer took a galley of type.
          </p>

          <div class="wrapper">
            <del class="del body-3">$40.00</del>

            <span class="span body-1">$20.00</span>
          </div>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">View All Menu</span>

            <span class="text text-2" aria-hidden="true">View All Menu</span>
          </a>

        </div>
      </div>

      <img src="shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

      <img src="shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

    </section>





    
    

    <section class="section menu" aria-label="menu-label" id="menu">
      <div class="container">

        <p class="section-subtitle text-center label-2">Special Selection</p>

        <h2 class="headline-1 section-title text-center">Delicious Menu</h2>

        <ul class="grid-list">

          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                  class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Greek Salad</a>
                  </h3>

                  <span class="badge label-1">Seasonal</span>

                  <span class="span title-2">$25.50</span>
                </div>

                <p class="card-text label-1">
                  Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese.
                </p>

              </div>

            </div>
          </li>

          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="menu-2.png" width="100" height="100" loading="lazy" alt="Lasagne"
                  class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Lasagne</a>
                  </h3>

                  <span class="span title-2">$40.00</span>
                </div>

                <p class="card-text label-1">
                  Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                </p>

              </div>

            </div>
          </li>

          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="menu-3.png" width="100" height="100" loading="lazy" alt="Butternut Pumpkin"
                  class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Butternut Pumpkin</a>
                  </h3>

                  <span class="span title-2">$10.00</span>
                </div>

                <p class="card-text label-1">
                  Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.
                </p>

              </div>

            </div>
          </li>

          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="menu-4.png" width="100" height="100" loading="lazy" alt="Tokusen Wagyu"
                  class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Tokusen Wagyu</a>
                  </h3>

                  <span class="badge label-1">New</span>

                  <span class="span title-2">$39.00</span>
                </div>

                <p class="card-text label-1">
                  Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.
                </p>

              </div>

            </div>
          </li>

          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="menu-5.png" width="100" height="100" loading="lazy" alt="Olivas Rellenas"
                  class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Olivas Rellenas</a>
                  </h3>

                  <span class="span title-2">$25.00</span>
                </div>

                <p class="card-text label-1">
                  Avocados with crab meat, red onion, crab salad stuffed red bell pepper and green bell pepper.
                </p>

              </div>

            </div>
          </li>

          <li>
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="menu-6.png" width="100" height="100" loading="lazy" alt="Opu Fish"
                  class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title">Opu Fish</a>
                  </h3>

                  <span class="span title-2">$49.00</span>
                </div>

                <p class="card-text label-1">
                  Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                </p>

              </div>

            </div>
          </li>

        </ul>

        <p class="menu-text text-center">
          During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
        </p>

        <a href="#" class="btn btn-primary">
          <span class="text text-1">View All Menu</span>

          <span class="text text-2" aria-hidden="true">View All Menu</span>
        </a>

        <img src="shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
          class="shape shape-2 move-anim">
        <img src="shape-6.png" width="343" height="345" loading="lazy" alt="shape"
          class="shape shape-3 move-anim">

      </div>
    </section>





   

    <section class="section testi text-center has-bg-image"
      style="background-image: url('testimonial-bg.jpg')" aria-label="testimonials">
      <div class="container">

        <div class="quote">”</div>

        <p class="headline-2 testi-text">
          I wanted to thank you for inviting me down for that amazing dinner the other night. The food was
          extraordinary.
        </p>

        <div class="wrapper">
          <div class="separator"></div>
          <div class="separator"></div>
          <div class="separator"></div>
        </div>

        <div class="profile">
          <img src="testi-avatar.jpg" width="100" height="100" loading="lazy" alt="Sam Jhonson"
            class="img">

          <p class="label-2 profile-name">Sam Jhonson</p>
        </div>

      </div>
    </section>





   
    <section class="reservation">
      <div class="container" id="container">

        <div class="form reservation-form bg-black-10">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form-left">

  <h2 class="headline-1 text-center">Online Reservation</h2>

  <p class="form-text text-center">
      Booking request <a href="tel:+88123123456" class="link">+88-123-123456</a>
      or fill out the order form
  </p>

  <div class="input-wrapper">
      <input type="text" id="name" name="name" placeholder="Your Name" autocomplete="off" class="input-field" required>

      <input type="number" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field" required>
  </div>

  <div class="input-wrapper">

      <div class="icon-wrapper">
          <select name="person" id="person" class="input-field" required>
              <option value="1">1 Person</option>
              <option value="2">2 Person</option>
              <option value="3">3 Person</option>
              <option value="4">4 Person</option>
              <option value="5">5 Person</option>
              <option value="6">6 Person</option>
              <option value="7">7 Person</option>
          </select>
      </div>

      <div class="icon-wrapper">
          <input type="date" id="date" name="date" class="input-field" required>
      </div>

      <div class="icon-wrapper">
          <select name="time" id="time" class="input-field" required>
              <option value="08:00am">08:00 am</option>
              <option value="09:00am">09:00 am</option>
              <option value="10:00am">10:00 am</option>
              <option value="11:00am">11:00 am</option>
              <option value="12:00pm">12:00 pm</option>
              <option value="01:00pm">01:00 pm</option>
              <option value="02:00pm">02:00 pm</option>
              <option value="03:00pm">03:00 pm</option>
              <option value="04:00pm">04:00 pm</option>
              <option value="05:00pm">05:00 pm</option>
              <option value="06:00pm">06:00 pm</option>
              <option value="07:00pm">07:00 pm</option>
              <option value="08:00pm">08:00 pm</option>
              <option value="09:00pm">09:00 pm</option>
              <option value="10:00pm">10:00 pm</option>
          </select>
      </div>

  </div>

  <textarea id="msg" name="order" placeholder="Message" autocomplete="off" class="input-field"></textarea>

  <button type="submit" value="submit" class="btn btn-secondary">
      <span class="text text-1">Book A Table</span>
      <span class="text text-2" aria-hidden="true">Book A Table</span>
  </button>

</form>

          <div class="form-right text-center" style="background-image: url('form-pattern.png')">

            <h2 class="headline-1 text-center" id="contact">Contact Us</h2>

            <p class="contact-label">Booking Request</p>

            <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+88-123-123456</a>

            <div class="separator"></div>

            <p class="contact-label">Location</p>

            <address class="body-4">
              Restaurant St, Delicious City, <br>
              London 9578, UK
            </address>

            <p class="contact-label">Lunch Time</p>

            <p class="body-4">
              Monday to Sunday <br>
              11.00 am - 2.30pm
            </p>

            <p class="contact-label">Dinner Time</p>

            <p class="body-4">
              Monday to Sunday <br>
              05.00 pm - 10.00pm
            </p>

          </div>

        </div>

      </div>
    </section>





   
    

    <section class="section features text-center" aria-label="features">
      <div class="container">

        <p class="section-subtitle label-2">Why Choose Us</p>

        <h2 class="headline-1 section-title">Our Strength</h2>

        <ul class="grid-list">

          <li class="feature-item">
            <div class="feature-card">

              <div class="card-icon">
                <img src="features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
              </div>

              <h3 class="title-2 card-title">Hygienic Food</h3>

              <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

            </div>
          </li>

          <li class="feature-item">
            <div class="feature-card">

              <div class="card-icon">
                <img src="features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
              </div>

              <h3 class="title-2 card-title">Fresh Environment</h3>

              <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

            </div>
          </li>

          <li class="feature-item">
            <div class="feature-card">

              <div class="card-icon">
                <img src="features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
              </div>

              <h3 class="title-2 card-title">Skilled Chefs</h3>

              <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

            </div>
          </li>

          <li class="feature-item">
            <div class="feature-card">

              <div class="card-icon">
                <img src="features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
              </div>

              <h3 class="title-2 card-title">Event & Party</h3>

              <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

            </div>
          </li>

        </ul>

        <img src="shape-7.png" width="208" height="178" loading="lazy" alt="shape"
          class="shape shape-1">

        <img src="shape-8.png" width="120" height="115" loading="lazy" alt="shape"
          class="shape shape-2">

      </div>
    </section>





   

    <section class="section event bg-black-10" aria-label="event">
      <div class="container">

        <p class="section-subtitle label-2 text-center">Recent Updates</p>

        <h2 class="section-title headline-1 text-center">Upcoming Event</h2>

        <ul class="grid-list">

          <li>
            <div class="event-card has-before hover:shine">

              <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                <img src="event-1.jpg" width="350" height="450" loading="lazy"
                  alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                <time class="publish-date label-2" datetime="2022-09-15">15/09/2022</time>
              </div>

              <div class="card-content">
                <p class="card-subtitle label-2 text-center">Food, Flavour</p>

                <h3 class="card-title title-2 text-center">
                  Flavour so good you’ll try to eat with your eyes.
                </h3>
              </div>

            </div>
          </li>

          <li>
            <div class="event-card has-before hover:shine">

              <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                <img src="event-2.jpg" width="350" height="450" loading="lazy"
                  alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                <time class="publish-date label-2" datetime="2022-09-08">08/09/2022</time>
              </div>

              <div class="card-content">
                <p class="card-subtitle label-2 text-center">Healthy Food</p>

                <h3 class="card-title title-2 text-center">
                  Flavour so good you’ll try to eat with your eyes.
                </h3>
              </div>

            </div>
          </li>

          <li>
            <div class="event-card has-before hover:shine">

              <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                <img src="event-3.jpg" width="350" height="450" loading="lazy"
                  alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                <time class="publish-date label-2" datetime="2022-09-03">03/09/2022</time>
              </div>

              <div class="card-content">
                <p class="card-subtitle label-2 text-center">Recipie</p>

                <h3 class="card-title title-2 text-center">
                  Flavour so good you’ll try to eat with your eyes.
                </h3>
              </div>

            </div>
          </li>

        </ul>

        <a href="#" class="btn btn-primary">
          <span class="text text-1">View Our Blog</span>

          <span class="text text-2" aria-hidden="true">View Our Blog</span>
        </a>

      </div>
    </section>

  </article>
</main>






-

<footer class="footer section has-bg-image text-center"
  style="background-image: url('footer-bg.jpg')">
  <div class="container">

    <div class="footer-top grid-list">

      <div class="footer-brand has-before has-after">

        <a href="#" class="logo">
          <img src="logo.svg" width="160" height="50" loading="lazy" alt="grilli home">
        </a>

        <address class="body-4">
          Restaurant St, Delicious City, London 9578, UK
        </address>

        <a href="mailto:booking@grilli.com" class="body-4 contact-link">booking@grilli.com</a>

        <a href="tel:+88123123456" class="body-4 contact-link">Booking Request : +88-123-123456</a>

        <p class="body-4">
          Open : 09:00 am - 01:00 pm
        </p>

        <div class="wrapper">
          <div class="separator"></div>
          <div class="separator"></div>
          <div class="separator"></div>
        </div>

        <p class="title-1">Get News & Offers</p>

        <p class="label-1">
          Subscribe us & Get <span class="span">25% Off.</span>
        </p>

        <form action="" class="input-wrapper">
          <div class="icon-wrapper">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
          </div>

          <button type="submit" class="btn btn-secondary">
            <span class="text text-1">Subscribe</span>

            <span class="text text-2" aria-hidden="true">Subscribe</span>
          </button>
        </form>

      </div>

      <ul class="footer-list">

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Home</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Menus</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">About Us</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Our Chefs</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Contact</a>
        </li>

      </ul>

      <ul class="footer-list">

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
        </li>

      </ul>

    </div>

    <div class="footer-bottom">

      <p class="copyright">
        &copy; 2022 Grilli. All Rights Reserved | Crafted by Ayush Dobhal
      </p>

    </div>

  </div>
</footer>







<a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
  <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>







<script src="script.js"></script>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html> 

<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "customerdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $person = $_POST['person'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $order = $_POST['order'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO bookedtable (name, phone, person, date, time, `order`) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $name, $phone, $person, $date, $time, $order);

    // Execute the statement
    if ($stmt->execute()) {
    echo "<script>
           Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Ordered successfully',
  showConfirmButton: false,
  timer: 2000
});
          </script>";
          ?>
          <meta http-equiv = "refresh" content = "2">
          <?php
    exit;
}
     else {
        echo "Error: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
}

$conn->close();
?>
