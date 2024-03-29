<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/session.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/cars.php";
require_once __DIR__ . "/lib/services.php";
require_once __DIR__ . "/lib/reviews.php";
require_once __DIR__ . "/lib/starRating.php";
require_once __DIR__ . "/templates/header.php";


$_SESSION['token'] = bin2hex(random_bytes(30));

$cars = getCars($pdo, 3);
$services = getServices($pdo, 6);
$reviews = getReviews($pdo, 4);
?>

<!-- HERO  -->

<!-- Back to top button -->
<a href="#" id="button"></a>

<section class="hero">
  <div class="hero-text">
    <h1 class="hero-text-title">La confiance avant tout!</h1>
    <p class="hero-text-description">
      Avec 15 ans d'experience, nous avont une large gamme de services et
      voitures d'occasion à vous offrir.
    </p>
  </div>
</section>
<!-- END HERO  -->

<!-- SERVICES  -->
<section id="services" class="services sections">
  <h2 class="header-titles">Services</h2>
  <p class="header-description">Le garage V. Parrot vous offre les meilleurs services pour vous et votre voiture. Nous
    avons
    plusieurs années d'expérince dans la manutention, entretien et securité pour votre véhicule. N'hesitez pas à nous
    contacter et demander un devis gratuit.</p>

  <?php if ($services) : ?>
    <article class="cards">
      <?php foreach ($services as  $service) { ?>
        <?php require __DIR__ . "/templates/service-part.php" ?>
      <?php }
      ?>
    </article>
  <?php else : ?>
    <article class="cards">
      <h3 class="message">Aucun service disponsible pour le moment.</h3>
    </article>
  <?php endif ?>

</section>
<!-- END SERVICES  -->

<!-- CARS  -->
<section id="cars" class="used-cars sections">
  <h2 class="header-titles">Nos voitures d'occasion</h2>
  <p class="header-description">Dans garage V. Parrot vous allez trouver les meilleurs véhicules d'occasion du marché.
    Notre
    équipe fait le meilleur pour vous offrir des voitures avec une garanti unique. Nous proposons un large choix
    d'annonces de voitures d'occasion et la possibilité d'estimer la valeur de reprise de votre ancien véhicule.</p>

  <?php if ($cars) : ?>

    <article class="cards">
      <?php foreach ($cars as  $car) { ?>
        <?php require __DIR__ . "/templates/car-part.php" ?>
      <?php }
      ?>

      <?php if (count($cars) > 1) : ?>
        <div class="more-cars">
          <a href="/pages/voitures.php" class="btn-fill center">Voir plus</a>
        </div>
      <?php endif ?>
    </article>
  <?php else : ?>
    <article class="cards">
      <h3 class="message">Aucune voiture disponsible pour le moment.</h3>
    </article>
  <?php endif ?>
</section>
<!-- END CARS  -->

<!-- testimonial  -->

<section class="testimonial sections" id="testimonial">
  <h2 class="header-titles">Les avis</h2>

  <p class="header-description"> Garage V. Parrot est un lieu de confiance pour tous ses
    clients. Vous pouvez compter sur nous comme plusieurs des nous fidèles clients.</p>

  <?php if ($reviews) : ?>
    <div id="demo" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

        <!-- the first review  -->
        <div class="carousel-item active">

          <div class="carousel-caption">
            <div class="stars">
              <?php
              echo starRating($reviews[0]['note']); ?>
            </div>
            <i class="fa-sharp fa-solid fa-quote-left quote-left"></i>
            <p>
              <?php echo $reviews[0]['comment']; ?>
            </p>
            <i class="fa-sharp fa-solid fa-quote-right quote-right"></i>
            <div class="name-caption"><?php echo $reviews[0]['client']; ?></div>
          </div>
        </div>

        <!-- foreach to start from 1  -->
        <?php foreach ($reviews as $key =>  $review) :
          if ($key < 1) continue;
          require __DIR__ . "/templates/review-part.php";
        endforeach;
        ?>

      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <i class="fas fa-arrow-left"> </i>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <i class="fas fa-arrow-right"> </i>
      </a>
    </div>
    <div class="add-review">
      <a href="/pages/donner-avis.php" class="btn-fill center">Donnez votre avis</a>
    </div>
</section>
<?php else : ?>
  <article class="cards">
    <h3 class="message">Aucun avis disponsible pour le moment.</h3>
  </article>
<?php endif ?>

<!-- END TESTIMONIAL  -->

<!-- CONTACT  -->

<section class="contact sections" id="contact">
  <h2 class="header-titles">Contact</h2>

  <div class="contact-wrapper">
    <h3>Comment pouvons-nous vous aider?</h3>
    <p>Service? Rendez-vous? Voiture d'occasion?</p>
    <p>N'hésitez pas à nous rejoindre.</p>

    <!-- messages  -->
    <div id="form-message" class="my-3 mt-3 d-flex justify-content-center"></div>

    <form method="POST" id="addContact">
      <div class="contact-form">
        <div class="contact-form-left">
          <div class="form-group">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" minlength="3" maxlength="25" placeholder="Dupont" autocomplete="off">
            <span class="error" id="lastname_err"> </span>
          </div>
          <div class="form-group">
            <label for="name">Prénom</label>
            <input type="text" name="name" id="name" minlength="3" maxlength="25" placeholder="Guillaume" autocomplete="off">
            <span class="error" id="name_err"> </span>
          </div>
          <div class="form-group">
            <label for="email">Adresse e-mail</label>
            <input type="text" name="email" id="email" minlength="15" maxlength="40" placeholder="email@example.fr" autocomplete="off">
            <span class="error" id="email_err"> </span>
          </div>
          <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="text" name="phone" id="phone" minlength="9" maxlength="15" placeholder="0105456789 / +33 123456789" autocomplete="off">
            <span class="error" id="phone_err"> </span>
          </div>
        </div>
        <div class="contact-form-right">
          <div class="form-group">
            <label for="subject">Sujet</label>
            <input type="text" name="subject" id="subject" minlength="10" maxlength="60" autocomplete="off">
            <span class="error" id="subject_err"> </span>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="5" autocomplete="off"></textarea>
            <span class="error" id="message_err"> </span>
          </div>
        </div>
      </div>
      <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">

      <div class="form-btn">
        <button type="button" id="submitbtn" class="btn-fill">Envoyer</button>
      </div>
    </form>

  </div>
</section>
<script src="../assets/scripts/validationContactForm.js"></script>

<?php
require_once __DIR__ . "/templates/footer.php";
?>