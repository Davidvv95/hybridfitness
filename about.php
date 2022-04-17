<?php
  include_once 'header.php';
?>

<main class="about-main">
  <!-- Carousel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel-stretch.jpg" class="d-block w-100" alt="Endurance Runner">
      <div class="carousel-caption d-none d-md-block">
        <h5>Unlock Your Body</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/runner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fine-tune Your Engine</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/barbell.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Build a Strong Foundation</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- Main Content -->
    <main>

        <section class="container-fluid">
          <div id="row1-index" class="row">
            <div class="column1-flex">
              <article class="col-md-8">
                <h5 class="mt-3">This course is for coaches and movement enthusiasts who want to take their strength, endurance and mobility training to the next level.</h5>
              </article>
            </div>
            <div class="column1-flex">
              <article class="col-md-8">
                <p class="pb-3">We're a team of sport science geeks, endurance sport fanatics and lovers of all things outdoors.</p>
                <p class="pb-3">Our client-centric team is comprised of a select group of highly skilled and talented individuals across multiple disciplines that in addition to their professional attributes, are also endurance sport athletes!</p>
              </article>
            </div>
          </div>
        </section>
        <section class="container-fluid">
          <div class="row mx-3">
            <div class="column2-flex mt-3">
              <article class="col-md-6">
                <h5>Gain access to more than 40hrs of lesson material</h5>
                <p class="access-hover mt-3"><a href="login.php">Log In <i class="fa-solid fa-circle-chevron-right"></i></a></p>
                <p class="access-hover mt-3"><a href="signup.php">Sign Up <i class="fa-solid fa-circle-chevron-right"></i></a></p>
                <div class="img-container mt-3 mb-3">
                  <img src="img/crossfit-about.jpg" alt="Crossfit">
                </div>
              </article>
              <article class="col-md-6">
                <figure>
                  <blockquote class="blockquote plato-quote">
                    <p>Lack of activity destroys the good condition of every human being.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    <cite title="Source Title" class="plato-ref">Plato</cite>
                  </figcaption>
                </figure>
              </article>
            </div>
          </div>
        </section>

    </main>
</main>

<?php
  include_once 'footer.php';
?>
