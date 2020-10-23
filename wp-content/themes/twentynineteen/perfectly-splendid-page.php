<?php
/**
 * Template Name: Just another perfect page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= get_the_title() ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/wp-includes/css/custompage/custompage-styles.css" rel="stylesheet" />
        <link href="/wp-includes/css/custompage/custompage-main.css" rel="stylesheet" />
        <style>
            .background {
                background:url('<?= handleScenario1($_GET["scenario"]) ?>');
                position: relative;
                z-index: 0;
                background-size: cover;
            }
		</style>
		<style>
			<?= get_template_part("custompage/custompage-main.css"); ?>
		</style>
    </head>
    <body id="page-top">
        <div id="root">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
            <div class="nav-inner container-fluid d-flex align-items-baseline">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img height="28" src="/wp-includes/css/custompage/img/hub.png" alt="Hub" srcset="">
                </a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Find a job</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Browse startups</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1 pull-right"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">For startups</a></li>
                        <li class="nav-item mx-0 mx-lg-1 pull-right"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btn component-search-bar__submit__button" style="border-radius: 0px !important; color: white !important;" href="#">Sign in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <div class="wrap background">
            <div class="wrap-inner">
        <header class="masthead text-white text-center">
            <div class="layer"></div>
            <div class="container d-flex align-items-center flex-column">
                <h1 class="mb-5">Find them most <br> exciting <strong>startup jobs</strong></h1>

                <!-- search box -->
                <!-- <div class="divider-custom divider-light search-bar search-bar-big"></div> -->
                <div class="component-hero-home__search-job-wrapper">
                    <div class="component-search-bar component-search-bar--big">
                      <div
                        class="component-search-bar__item component-search-bar__item--keyword"
                        style="border-color: rgba(215, 215, 215, 0.6)"
                      >
                      <i class="component-search-bar__item__icon fa fa-search"></i>
                        <input
                          type="text"
                          placeholder="Job title or keyword"
                          autocomplete="off"
                          class="component-search-bar__item__input form-control"
                        />
                      </div>
                      <div
                        class="component-search-bar__item component-search-bar__item--location"
                      >
                        <i class="component-search-bar__item__icon fa fa-map-pin"></i>
                        <div
                          placeholder="City, area or select remote"
                          class="component-search-bar__item__address"
                        >
                          <!-- <input
                            autocomplete="off"
                            placeholder="City, area or select remote"
                            class="form-control component-search-bar__item__input pac-target-input"
                          /> -->
                          <input class="form-control component-search-bar__item__input pac-target-input" placeholder="Copenhagen, Denmark" value="<?= handleScenario2($_GET["scenario"]) ?>" />
                        </div>
                      </div>
                      <div class="component-search-bar__submit">
                        <button class="component-search-bar__submit__button btn">Search</button>
                      </div>
                    </div>
                  </div>                  
                <!-- /search box -->
            </div>
        </header>
        <!-- categories -->
        <section id="section-1-5">
            <div class="p-75">
                <h2 class="mb-5">Explore <br> by Category</h2>
                <ul class="list-group">
					<?php foreach ($categories = get_available_categories() as $category): ?>
					<a href="?category=<?= encodeURIComponent($category[1]) ?>"  class="py-3 pseudo-hover"><li class="list-group d-inline my-3 <?= isActiveCategory($_GET["category"], $category[1]) ? "selected" : "" ?> " ><i class="fas <?= $category[0] ?> mx-2"></i><?= $category[1] ?></li></a>
					<?php endforeach; ?>
                </ul>
            </div>
        </section>
    </div>
    </div>
        <!-- /categories -->
        
        
        <!-- Portfolio Section-->
        <section class="page-section" id="section-2">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-secondary mb-5">Find a job <strong><?= get_value_from_query($_GET["category"]) ?></strong></h2>

                <!-- Portfolio Grid Items-->
                <div class="row-wrapper">

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <ul class="list-unstyled m-2 d-flex flex-row justify-content-between">
                                    <li class="list-item">Copenhagen</li>
                                    <li class="list-item">Full time</li>
                                </ul>
                            </div>
                            <div class="card-body mb-3">
                              <h3 class="card-text">Fintech startup is looking for an iOS lead developer.</p>
                            </div>
                            <div class="card-footer">
                                <img height="20" src="/wp-includes/css/custompage/img/hub.png" alt="Hub" srcset="">
                                &nbsp;&nbsp;<strong>MyMoni</strong> <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <ul class="list-unstyled m-2 d-flex flex-row justify-content-between">
                                    <li class="list-item">Copenhagen</li>
                                    <li class="list-item">Full time</li>
                                </ul>
                            </div>
                            <div class="card-body mb-3">
                              <h3 class="card-text">Fintech startup is looking for an iOS lead developer.</p>
                            </div>
                            <div class="card-footer">
                                <img height="20" src="/wp-includes/css/custompage/img/hub.png" alt="" srcset="">
                                &nbsp;&nbsp;<strong>MyMoni</strong> <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <ul class="list-unstyled m-2 d-flex flex-row justify-content-between">
                                    <li class="list-item">Copenhagen</li>
                                    <li class="list-item">Full time</li>
                                </ul>
                            </div>
                            <div class="card-body mb-3">
                              <h3 class="card-text">Fintech startup is looking for an iOS lead developer.</p>
                            </div>
                            <div class="card-footer">
                                <img height="20" src="/wp-includes/css/custompage/img/hub.png" alt="" srcset="">
                                &nbsp;&nbsp;<strong>MyMoni</strong> <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <ul class="list-unstyled m-2 d-flex flex-row justify-content-between">
                                    <li class="list-item">Copenhagen</li>
                                    <li class="list-item">Full time</li>
                                </ul>
                            </div>
                            <div class="card-body mb-3">
                              <h3 class="card-text">Fintech startup is looking for an iOS lead developer.</p>
                            </div>
                            <div class="card-footer">
                                <img height="20" src="/wp-includes/css/custompage/img/hub.png" alt="" srcset="">
                                &nbsp;&nbsp;<strong>MyMoni</strong> <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <ul class="list-unstyled m-2 d-flex flex-row justify-content-between">
                                    <li class="list-item">Copenhagen</li>
                                    <li class="list-item">Full time</li>
                                </ul>
                            </div>
                            <div class="card-body mb-3">
                              <h3 class="card-text">Fintech startup is looking for an iOS lead developer.</p>
                            </div>
                            <div class="card-footer">
                                <img height="20" src="/wp-includes/css/custompage/img/hub.png" alt="" srcset="">
                                &nbsp;&nbsp;<strong>MyMoni</strong> <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <ul class="list-unstyled m-2 d-flex flex-row justify-content-between">
                                    <li class="list-item">Copenhagen</li>
                                    <li class="list-item">Full time</li>
                                </ul>
                            </div>
                            <div class="card-body mb-3">
                              <h3 class="card-text">Fintech startup is looking for an iOS lead developer.</p>
                            </div>
                            <div class="card-footer">
                                <img height="20" src="/wp-includes/css/custompage/img/hub.png" alt="" srcset="">
                                &nbsp;&nbsp;<strong>MyMoni</strong> <br>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <!-- Core theme JS-->
        <script>
            $(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $("nav").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $("nav").removeClass("active");
        }
    });
});
        </script>
        </div>
    </body>
</html>
