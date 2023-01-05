<!--------------------------
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will generate the main body content for the
home page of the comer o sol web application.
--------------------------->

<div class="pageIntro mt-5 mx-auto">
    <h2 class="main-title text-center" id="main-title">Welcome to comer o sol!</h2>
    <p class="main-subtitle text-center" id="main-subtitle">"You are what you eat," or so the saying goes, so why not
        eat what fills you with joy?
    </p>
    <hr>
</div>

<div class="container bodydiv">
    <div class="row">
        <div class="col-12 col-md-8 ptext mb-3">
            Here at comer o sol, you will find a collection of recipes where the focus is not on a specific diet or trend, but
            rather the pleasure a good meal can bring. From savory snacks to mouth-watering entrees to luxurious treats, we
            have gathered the recipes that have brought us numerous magical moments and memories. We hope this journey of joy
            through cuisine will continue with you.
        </div>
        <div class="col-12 col-md-4">
            <div id="homeslide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#homeslide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#homeslide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#homeslide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/hs1.jpg" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/hs2.jpg" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/hs3.jpg" class="d-block w-100" alt="">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#homeslide" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homeslide" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>