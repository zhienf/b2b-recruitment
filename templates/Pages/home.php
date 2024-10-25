<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Efficient B2B Recruitment Solutions</h2>
                <p class="animate__animated animate__fadeInUp">With years of experience in connecting businesses to skilled contractors, Nathan Jims simplifies recruitment. From local SMEs to large-scale business projects, we help you find the right talent for the job.</p>
                <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'organisation']) ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started as an Organisation</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Opportunities Tailored for Your Expertise</h2>
                <p class="animate__animated animate__fadeInUp">Are you a contractor looking for your next project? Register with us to gain access to exclusive business opportunities. We match your skills with projects that need your expertise.</p>
                <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'contractor']) ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register as a Contractor</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
    </svg>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Who we are</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Welcome to Jims Recruiting, where we specialize in connecting businesses with the right contractors and small to medium-sized enterprises (SMEs) for successful project partnerships. With years of experience in the B2B industry, our mission is to simplify the recruitment process by providing a streamlined platform for project-based collaborations.
                </p>
                <p>
                    Founded by Nathan Jims, a seasoned professional recruiter, Jims Recruiting is dedicated to helping businesses find the talent they need to complete projects efficiently and successfully. Nathan’s passion for connecting people with opportunities has transformed our small network of local contractors into a trusted resource for organizations across diverse industries.
                </p>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <h5><strong>Why Choose Jims Recruiting?</strong></h5>
                <ul class="list-unstyled">
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>Tailored Contractor Matching</span>
                    </li>
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>Streamlined Recruitment Process</span>
                    </li>
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>Experience You Can Trust</span>
                    </li>
                </ul>
                <p>
                    At Jims Recruiting, we take the hassle out of recruitment, allowing you to focus on what you do best—growing your business.
                </p>

                <a href="#" class="read-more">
                    <span>Learn More</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>


    </div>

</section><!-- /About Section -->

<!-- Services Section -->
<section id="services" class="services section">

    <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item col-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                    <i class="bi bi-binoculars"></i>
                    <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                    <i class="bi bi-box-seam"></i>
                    <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
                </a>
            </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

            <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i>
                                <spab>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</spab>
                            </li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit</span>.</li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <?= $this->Html->image('/img/working-1.jpg', [
                            'alt' => '',
                            'class' => "img-fluid"
                        ]) ?>
                    </div>
                </div>
            </div><!-- End Tab Content Item -->

            <div class="tab-pane fade" id="features-tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <?= $this->Html->image('/img/working-2.jpg', [
                            'alt' => '',
                            'class' => "img-fluid"
                        ]) ?>
                    </div>
                </div>
            </div><!-- End Tab Content Item -->

        </div>

    </div>

</section><!-- /Services Section -->

