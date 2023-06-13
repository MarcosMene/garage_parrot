<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Garage V. Parrot</title>

  <!-- BOOTSTRAP  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- FONT AWESOME  -->
  <script src="https://kit.fontawesome.com/1a0b88a9d7.js" crossorigin="anonymous"></script>

  <!-- CSS  -->
  <!-- <link rel="stylesheet" href="./assets/css/override-bootstrap.css"> -->
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <nav class="nav">
        <a class="logo" href="/">
          <img src="./assets/images/logo_car_title.png" alt="logo garage parrot">
        </a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li>
            <a class="nav-link" aria-current="page" href="#">Accueil</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#services">Services</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#cars">Voitures</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#">Avis</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#">Horaires</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#">Contact</a>
          </li>

          <li>
            <a href="#" class="btn-wire">Connecter</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>

  <main class="main">
    <!-- HERO  -->
    <section class="hero">
      <div class="hero-text">
        <h1 class="hero-text-title">La confiance avant tout!</h1>
        <p class="hero-text-description">
          Avec 15 d'experience, nous avont une large gamme de services et
          voitures d'occasion à vous offrir.
        </p>
      </div>
    </section>
    <!-- END HERO  -->

    <div class="wrapper">
      <!-- SERVICES  -->
      <section id="services" class="services sections">
        <h2 class="header-titles">Services</h2>
        <article class="cards">
          <div class="card">
            <div class="card-header">
              <i class="fa-solid fa-wrench"></i>
            </div>
            <div class="card-body">
              <h4 class="card-title center">Reparation</h4>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, quidem.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fa-solid fa-wrench"></i>
            </div>
            <div class="card-body">
              <h4 class="card-title center">Reparation</h4>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, quidem.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fa-solid fa-wrench"></i>
            </div>
            <div class="card-body">
              <h4 class="card-title center">Reparation</h4>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, quidem.
              </p>
            </div>
          </div>
        </article>
      </section>
      <!-- END SERVICES  -->

      <!-- CARS  -->
      <section id="cars" class="used-cars sections">
        <h2 class="header-titles">Nos voitures d'occasion</h2>
        <article class="cards">
          <div class="card">
            <div class="card-header">
              <img class="card-img-top" src="./assets/images/car_card.png" alt="voiture marque X">
            </div>
            <div class="card-body">
              <h4 class="card-title">Title</h4>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, quidem.
              </p>
              <hr>
              <p class="price">4444€</p>
              <a href="#" class="btn-wire large">Details</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <img class="card-img-top" src="./assets/images/car_card.png" alt="voiture marque Y">
            </div>
            <div class="card-body">
              <h4 class="card-title">Title</h4>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, quidem.
              </p>
              <hr>
              <p class="price">4444€</p>
              <a href="#" class="btn-wire large">Details</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <img class="card-img-top" src="./assets/images/car_card.png" alt="voiture marque D">
            </div>
            <div class="card-body">
              <h4 class="card-title">Title</h4>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, quidem.
              </p>
              <hr>
              <p class="price">4444€</p>
              <a href="#" class="btn-wire large">Details</a>
            </div>
          </div>
        </article>
      </section>
      <!-- END CARS  -->
    </div>

    <!-- testimonial  -->
    <section class="testimonial sections" id="testimonial">
      <h2 class="header-titles">Les avis</h2>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">

            <div class="carousel-caption">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <i class="fa-sharp fa-solid fa-quote-left quote-left"></i>
              <p>
                hubsopot offers a powerr full suite of tools that every marketing team must have. And if you get stuck,
                their suppor tteam will help out. Im using hubsotpo to mage the entire inboud process. In one houre i
                can have a complet leag generation campaing set up.
                tteam will help out. Im using because.
              </p>
              <i class="fa-sharp fa-solid fa-quote-right quote-right"></i>
              <div class="name-caption">Daysi</div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="carousel-caption">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <i class="fa-sharp fa-solid fa-quote-left quote-left"></i>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quas perferendis impedit iusto ipsa.
              </p>
              <i class="fa-sharp fa-solid fa-quote-right quote-right"></i>
              <div class="name-caption">Sophia</div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="carousel-caption">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <i class="fa-sharp fa-solid fa-quote-left quote-left"></i>
              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>
              <i class="fa-sharp fa-solid fa-quote-right quote-right"></i>
              <div class="name-caption">Jorge</div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <i class="fas fa-arrow-left"> </i>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <i class="fas fa-arrow-right"> </i>
        </a>
      </div>
    </section>
    <!-- END TESTIMONIAL  -->

    <!-- CONTACT  -->
    <section class="contact sections" id="contact">
      <h2 class="header-titles">Contact</h2>
      <div class="contact-wrapper">
        <h3>Comment pouvons-nous vous aider?</h3>
        <p>Service? Rendez-vous? Voiture d'occasion?</p>
        <p>N'hésitez pas à nous rejoindre.</p>
        <form action="">
          <div class="contact-form">
            <div class="contact-form-left">
              <div>
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname">
              </div>
              <div>
                <label for="name">Prenom</label>
                <input type="text" name="name" id="name">
              </div>
              <div>
                <label for="email">Adresse email</label>
                <input type="text" name="email" id="email">
              </div>
              <div>
                <label for="phone">Téléphone</label>
                <input type="text" name="phone" id="phone">
              </div>
            </div>
            <div class="contact-form-right">
              <div>
                <label for="subject">Sujet</label>
                <input type="text" name="subject" id="subject">
              </div>
              <div>
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
              </div>
            </div>
          </div>
          <div class="contact-form-btn">

            <input type="submit" value="Envoyer" class="btn-fill">
          </div>
        </form>
      </div>
    </section>
    <!-- END CONTACT  -->

    <!-- FOOTER   -->

    <footer id="footer" class="footer">
      <div class="footer-logo">
        <img src="./assets/images/logo_white.png" alt="logo garage parrot">
      </div>
      <div class="footer-schedule">
        <div class="footer-local">
          <p class="footer-local-owner">Vicent Parrot</p>
          <div class="footer-phone">
            <i class="fa-solid fa-phone icon"></i>
            <p>555-555-5455</p>
          </div>
          <div class="footer-email">
            <i class="fa-solid fa-envelope icon"></i>
            <p>garageparrot@email.com</p>
          </div>
          <div class="footer-address">
            <p>45 Av. Gen. Foch 31000 Toulouse</p>
          </div>
        </div>
        <div class="footer-days">
          <h5 class="footer-days-title">Horaires d'ouverture</h5>
          <div class="footer-day-week">
            <span class="footer-day">lun:</span>
            <span class="morning-start">08:45</span>
            <span class="morning-end">12:00</span>
            <span> -</span>
            <span class="afternoon-start">14:00</span>
            <span class="afternoon-end">18:00</span>
          </div>
          <div class="footer-day-week">
            <span class="footer-day">mar:</span>
            <span class="morning-start">08:45</span>
            <span class="morning-end">12:00</span>
            <span> -</span>
            <span class="afternoon-start">14:00</span>
            <span class="afternoon-end">18:00</span>
          </div>
          <div class="footer-day-week">
            <span class="footer-day">mer:</span>
            <span class="morning-start">08:45</span>
            <span class="morning-end">12:00</span>
            <span> -</span>
            <span class="afternoon-start">14:00</span>
            <span class="afternoon-end">18:00</span>
          </div>
          <div class="footer-day-week">
            <span class="footer-day">jeu:</span>
            <span class="morning-start">08:45</span>
            <span class="morning-end">12:00</span>
            <span> -</span>
            <span class="afternoon-start">14:00</span>
            <span class="afternoon-end">18:00</span>
          </div>
          <div class="footer-day-week">
            <span class="footer-day">ven:</span>
            <span class="morning-start">08:45</span>
            <span class="morning-end">12:00</span>
            <span> -</span>
            <span class="afternoon-start">14:00</span>
            <span class="afternoon-end">18:00</span>
          </div>
          <div class="footer-day-week">
            <span class="footer-day">sam:</span>
            <span class="morning-start">08:45</span>
            <span class="morning-end">12:00</span>
            <span> -</span>
            <span class="afternoon-start">14:00</span>
            <span class="afternoon-end">18:00</span>
          </div>
          <div class="footer-day-week">
            <span class="footer-day">dim:</span>
            <span class="morning-start">ferme</span>

          </div>

        </div>
      </div>
      <div class="footer-navigation">
        <nav class="footer-nav">

          <ul class="footer-nav-list">
            <li>
              <a class="footer-nav-link" aria-current="page" href="#">Accueil</a>
            </li>
            <li>
              <a class="footer-nav-link" aria-current="page" href="#services">Services</a>
            </li>
            <li>
              <a class="footer-nav-link" aria-current="page" href="#cars">Voitures</a>
            </li>
            <li>
              <a class="footer-nav-link" aria-current="page" href="#">Avis</a>
            </li>
            <li>
              <a class="footer-nav-link" aria-current="page" href="#">Horaires</a>
            </li>
            <li>
              <a class="footer-nav-link" aria-current="page" href="#">Contact</a>
            </li>

            <li>
              <a href="#" class="footer-nav-link">Connecter</a>
            </li>
          </ul>
        </nav>
        <div class="footer-social-network">
          <i class="fa-brands fa-square-facebook"></i>
          <i class="fa-brands fa-square-instagram"></i>
          <i class="fa-brands fa-square-twitter"></i>
        </div>
      </div>
    </footer>

    <!-- END FOOTER   -->


  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="./assets/scripts/scripts.js"></script>
</body>

</html>