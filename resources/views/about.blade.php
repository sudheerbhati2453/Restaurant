<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ak Fast Food-about</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="/restaurant.png" type="image/png">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('navbar')

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                @auth
                    <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
                @endauth

            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Ak Fast Food</h1>
                        <p class="mb-4"> we take pride in offering a unique dining experience that combines exceptional flavors with a warm and inviting atmosphere. Established in <span class="text-warning">2017</span>, our restaurant has become a local favorite for those seeking delicious cuisine and impeccable service.
                            Our talented chefs are dedicated to crafting mouthwatering dishes using only the freshest and finest ingredients. From signature appetizers to delectable main courses and indulgent desserts, our menu reflects a commitment to culinary excellence. Whether you're joining us for a casual lunch, a special dinner, or a celebratory event, we strive to exceed your expectations with every bite.

                            In addition to our exquisite food, we also offer a carefully curated selection of wines and beverages to complement your meal. Our attentive and friendly staff is here to ensure that your dining experience is nothing short of extraordinary.

                            Explore our website to view our menu, learn more about our chefs, and make reservations for your next visit. Thank you for considering <span class="text-warning">Ak Fast Food</span> for your dining pleasure. We look forward to welcoming you and creating memorable moments together.
                        </p>

                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">8</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">4</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Master Chefs</h1>
        </div>
        <div class="row g-4">
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="position-relative rounded-circle overflow-hidden m-2" style="aspect-ratio: 1; width: 100%;">
                        <img class="img-fluid w-100 h-100" src="img/team-1.jpg" alt="Ashok Mittal" style="object-fit: cover;">
                    </div>
                    <h5 class="mb-0">Ashok Mittal</h5>
                    <small>Head Chef</small>
                    <div class="d-flex justify-content-center mt-4">
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="position-relative rounded-circle overflow-hidden m-2" style="aspect-ratio: 1; width: 100%;">
                        <img class="img-fluid w-100 h-100" src="img/team-2.jpg" alt="Vikas Patel" style="object-fit: cover;">
                    </div>
                    <h5 class="mb-0">Vikas Patel</h5>
                    <small>Sous Chef</small>
                    <div class="d-flex justify-content-center mt-4">
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="position-relative rounded-circle overflow-hidden m-2" style="aspect-ratio: 1; width: 100%;">
                        <img class="img-fluid w-100 h-100" src="img/team-3.jpg" alt="Vikas Khanna" style="object-fit: cover;">
                    </div>
                    <h5 class="mb-0">Vikas Khanna</h5>
                    <small>Pastry Chef</small>
                    <div class="d-flex justify-content-center mt-4">
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="position-relative rounded-circle overflow-hidden m-2" style="aspect-ratio: 1; width: 100%;">
                        <img class="img-fluid w-100 h-100" src="img/team-4.jpg" alt="Sam Mathew" style="object-fit: cover;">
                    </div>
                    <h5 class="mb-0">Sam Mathew</h5>
                    <small>Grill Chef</small>
                    <div class="d-flex justify-content-center mt-4">
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Team End -->


        @include('footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
