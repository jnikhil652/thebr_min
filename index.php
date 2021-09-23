<?php require("autoload.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>/img/favicon.png">
    <!-- <link rel="stylesheet" href="<?= BASE_URL ?>/faviconassets/css/style.css"> -->
    <title><?= $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-light bg-light sticky-top mb-5">
        <div class="container-fluid">
            <a class="navbar-brand col-md-2 col-9" href="<?= BASE_URL ?>">
                <img class="img-fluid" src="<?= BASE_URL . "/img/logo.png" ?>" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="h1 text-primary">
                    Lift your business to new heights with our <span style="color:#155882">' <img class="img-fluid col-3" src="<?= BASE_URL ?>/img/headline.png" alt="" srcset=""> '</span> services
                </span>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-md-12 text-center">
                <button class="btn btn-lg btn-danger" style="border-radius: 25px;">Get Started</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img class="img-fluid" src="<?= $homeMainImg ?>" alt="">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="h4">
                    Making it big online
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <span>What we do... The Branding is a digital marketing agency based in Pune. In today's digital business world, you need a partner who can help you take advantage of marketing opportunities across a variety of channels in real-time. The Branding combines a data-driven approach.</span>
            </div>
        </div>
    </div>
    <div class="container my-4" data-aos="zoom-in-up">
        <div class="row">
            <div class="col-md-4 mt-xs-2">
                <div class="card">
                    <div class="card-body text-center shadow">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="<?= BASE_URL . '/img/seo.png' ?>" alt="" srcset="">
                            </div>
                        </div>
                        SEO
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-xs-2">
                <div class="card">
                    <div class="card-body text-center shadow">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="<?= BASE_URL . '/img/social-media.png' ?>" alt="" srcset="">
                            </div>
                        </div>
                        Social media marketing
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-xs-2">
                <div class="card">
                    <div class="card-body text-center shadow">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="<?= BASE_URL . '/img/lead.png' ?>" alt="" srcset="">
                            </div>
                        </div>
                        Lead generation
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-4 mt-xs-2">
                <div class="card">
                    <div class="card-body text-center shadow">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="<?= BASE_URL . '/img/web-development.png' ?>" alt="" srcset="">
                            </div>
                        </div>
                        Website designing and development
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-xs-2">
                <div class="card">
                    <div class="card-body text-center shadow">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="<?= BASE_URL . '/img/robot.png' ?>" alt="" srcset="">
                            </div>
                        </div>
                        Android App Development
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-xs-2">
                <div class="card">
                    <div class="card-body text-center shadow">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="<?= BASE_URL . '/img/browser.png' ?>" alt="" srcset="">
                            </div>
                        </div>
                        API Development
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-4 mt-xs-2">
                <div class="card">
                    <div class="card-body text-center shadow">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="<?= BASE_URL . '/img/ux.png' ?>" alt="" srcset="">
                            </div>
                        </div>
                        Graphic Designing
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-xs-2">
                <div class="card">
                    <div class="card-body text-center shadow">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="<?= BASE_URL . '/img/cubes.png' ?>" alt="" srcset="">
                            </div>
                        </div>
                        3D Graphics
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-xs-2">
                <div class="card">
                    <div class="card-body text-center shadow">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <img class="img-fluid" src="<?= BASE_URL . '/img/video.png' ?>" alt="" srcset="">
                            </div>
                        </div>
                        Video Editing
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-dark">
        <div class="container text-light">
            <div class="row">
                <div class="col-md-6 my-5">
                    <span class="h2">Let’s Start your project, <a class="text-decoration-none" href="mailto:enquiry@thebranding.in">Mail Us</a></span>
                </div>
                <div class="col-md-6 my-5 d-flex justify-content-end">
                    <p class="h3"><a class="text-danger text-decoration-none" href="tel:+918208338053">+91 82083 38053</a></p>
                </div>
            </div>
        </div>
        <div class="mx-5 text-light">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-10">
                            <a href="<?= BASE_URL ?>">
                                <img class="img-fluid" src="<?= BASE_URL . "/img/logo.png" ?>" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="h5">Services</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col "><a class="text-decoration-none" href="">SEO</a></div>
                            <div class="col "><a class="text-decoration-none" href="">Social media marketing</a></div>
                            <div class="col "><a class="text-decoration-none" href="">Lead generation</a></div>
                            <div class="col "><a class="text-decoration-none" href="">Website designing and development</a></div>
                            <div class="col "><a class="text-decoration-none" href="">Android App Development</a></div>
                            <div class="col "><a class="text-decoration-none" href="">API Development</a></div>
                            <div class="col "><a class="text-decoration-none" href="">Graphic Designing</a></div>
                            <div class="col "><a class="text-decoration-none" href="">3D Graphics</a></div>
                            <div class="col "><a class="text-decoration-none" href="">Video Editing</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="h5">Useful Links</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="col "><a class="text-decoration-none" href="">Home</a></div>
                            <div class="col "><a class="text-decoration-none" href="">Services</a></div>
                            <div class="col "><a class="text-decoration-none" href="">About</a></div>
                            <div class="col "><a class="text-decoration-none" href="">Contact</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <span class="h5">Enquire Us</span> -->
                            <a class="btn btn-lg btn-light" href="javascript:void(0);" style="border-radius: 25px;">Enquire Us</a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <a class="btn btn-lg btn-light" href="javascript:void(0);">Enquire</a> -->
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                        <form>
                            <div class="form-group mt-1">
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group mt-1">
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group mt-1">
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group mt-1">
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group mt-1">
                                <textarea type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> -->
                    </div>
                </div>
            </div>

        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-light text-center">&#9400; <?= date('Y') ?> The Branding | All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
        });
    </script>
</body>

</html>