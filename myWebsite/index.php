<?php include("header.php") ?>
<div class="row">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/images/homepage/banner.jpg" class="d-block img-fluid" alt="banner image" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/images/homepage/banner.jpg" class="d-block w-100" alt="banner image" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/homepage/banner.jpg" class="d-block w-100" alt="banner image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="col-lg-10 mx-auto">
    <div class="heading_title text-center">
        <h2>about us</h2>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="about_section">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis doloribus placeat numquam aspernatur rerum veniam voluptates esse quo culpa officia, praesentium eum error modi! Modi sint architecto accusantium explicabo quisquam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum odit omnis distinctio quis beatae ducimus dolorum repellendus dolor qui cupiditate optio nulla rerum quo magnam, eum iure fuga quam facilis.</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="about_image">
                <img src="assets/images/homepage/about_us.jpg" alt="about image" class="img-fluid" />
            </div>
        </div>
    </div>

    <div class="heading_title text-center">
        <h2>services</h2>
    </div>


    <div class="row justify-content-around">
        <div class="col-lg-4">
            <div class="service_card">
                <div class="service_icon text-center">
                    <span><i class="fa-solid fa-gears"></i></span>
                </div>
                <div class="service_content text-center">
                    <h3>SPM machines</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="service_card">
                <div class="service_icon text-center">
                    <span><i class="fa-solid fa-gears"></i></span>
                </div>
                <div class="service_content text-center">
                    <h3>Pipe bending</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="service_card">
                <div class="service_icon text-center">
                    <span><i class="fa-solid fa-gears"></i></span>
                </div>
                <div class="service_content text-center">
                    <h3>coil bending</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="heading_title text-center">
        <h2>our client</h2>
    </div>

    <section id="demos">
        <div class="row">
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#"><img src="assets/images/homepage/iai-logo.svg" alt="imperial auto logo" class="img-fluid" /></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="assets/images/homepage/JK-finner.png" alt="JK fenner logo" class="img-fluid" /></a>
                    </div>
                    <div class="item">
                        <h4>3</h4>
                    </div>
                    <div class="item">
                        <h4>4</h4>
                    </div>
                    <div class="item">
                        <h4>5</h4>
                    </div>
                    <div class="item">
                        <h4>6</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include("footer.php") ?>