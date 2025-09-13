<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    {{-- <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body class="bg-light-blue">
    <div class="container-fluid background-layout">
        <div class="row h-100">
            <div class="col-8 bg-left"></div>
            <div class="col-4 bg-right"></div>
        </div>
    </div>

    <x-header></x-header>

    <main class="d-flex flex-column z-2 position-relative">
        <section class="mt-5 vh-70 mb-5">
            <div class="container mt-5 row align-items-center">
                <div class="col-lg-5 mx-auto">
                    <h1 class="display-4 fw-bold text-body-emphasis">Cardify Health</h1>
                    <p class="lead mt-5">
                        Welcome to Cardify Health — where you can find the right doctor and book appointments instantly.
                        Whether you need a general checkup, a specialist consultation, or urgent care, Cardify helps
                        you find the right doctor closest to you.
                    </p>
                    <div class="mt-5 mb-5">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Get Started</button>
                    </div>
                </div>

                <div class="col-lg-5 text-center">
                    <!-- <img src="./assets/images/image.png" alt="Doctor" class="img-fluid" style="max-height: 60vh;"> -->
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img src="./assets/images/2149844651.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./assets/images/image copy.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./assets/images/image.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container mb-3">
            <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 rounded-pill mb-2">
                <a class="navbar-brand" href="#">Navbar</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading1">Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading2">Vision</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">Value</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#scrollspyHeading3">Compassion</a></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading4">Integrity</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#scrollspyHeading5">Innovation</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
                data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-3" tabindex="0">

                <h4 id="scrollspyHeading1">Mission</h4>
                <p>
                    Our mission at Cardify Health is to bridge the gap between patients and quality healthcare.
                    We provide an easy-to-use digital platform to help people find the right doctors, book appointments
                    instantly,
                    and access care that is affordable and personalized.
                </p>

                <h4 id="scrollspyHeading2">Vision</h4>
                <p>
                    We envision a future where everyone has seamless, technology-powered access to healthcare—no matter
                    where they are.
                    Our goal is to empower individuals with tools that put their health and well-being in their own
                    hands.
                </p>

                <h4 id="scrollspyHeading3">Compassion</h4>
                <p>
                    We lead with empathy in every interaction—understanding the challenges our users face and responding
                    with care and respect.
                </p>

                <h4 id="scrollspyHeading4">Integrity</h4>
                <p>
                    Trust is the foundation of healthcare. We are committed to transparency, data privacy, and doing the
                    right thing—always.
                </p>

                <h4 id="scrollspyHeading5">Innovation</h4>
                <p>
                    We're continuously evolving. By embracing new technologies, we push the boundaries of what's
                    possible in digital healthcare.
                </p>
            </div>
        </section>

        <section class="bg-body-tertiary p-5">
            <div class="container">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!-- Mission -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Our Mission
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Our mission is to revolutionize access to healthcare by bridging the gap between
                                patients and providers.
                                We focus on providing intuitive, technology-driven solutions that make scheduling and
                                receiving care easier than ever.
                            </div>
                        </div>
                    </div>

                    <!-- Vision -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Our Vision
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Our vision is to become the leading digital platform for healthcare navigation, enabling
                                anyone to connect with top-quality care anytime, anywhere.
                                We dream of a future where no one is left behind in the healthcare journey.
                            </div>
                        </div>
                    </div>

                    <!-- Values -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Our Values
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Integrity:</strong> We act with honesty and transparency.</li>
                                    <li><strong>Compassion:</strong> We care deeply about every patient and provider we
                                        serve.</li>
                                    <li><strong>Innovation:</strong> We push the boundaries of technology to solve real
                                        problems.</li>
                                    <li><strong>Accessibility:</strong> We believe healthcare should be for everyone,
                                        regardless of background or status.</li>
                                    <li><strong>Accountability:</strong> We take responsibility for our actions and
                                        their impact.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script> -->

</body>

</html>
