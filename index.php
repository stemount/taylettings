<?php

require_once './vendor/autoload.php';
Twig_Autoloader::register();

require './inc/common.inc.php';
print_r(_request_path());
print_r(_get_request_page_vars());
print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>TAY Lettings</title>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap theme CSS -->
    <link href="/dist/css/bootstrap-theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <!-- <link href="carousel.css" rel="stylesheet"> -->
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

          <div class="row">
          <div class="col-md-4">
            <div class="navbar-header">
              <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="TAY Lettings" /></a>
            </div>

            <a href="#menu" class="menu-but">
              <div class="menu-bar"></div>
              <div class="menu-bar"></div>
              <div class="menu-bar"></div>
              <span>Menu</span>
            </a>
          </div>

          <div class="col-md-8">
          <div class="navbar">
            <nav id="menu">
              <div>
              <ul class="nav navbar-nav">
                <li class="navigation_link first"><a href="#">Home</a></li>
                <li class="navigation_link"><a href="#about">Available Properties</a></li>
                <li class="navigation_link"><a href="#contact">Tenants</a></li>
                <li class="navigation_link"><a href="#contact">Landlords</a></li>
                <li class="navigation_link"><a href="#contact">Our Team</a></li>
                <li class="navigation_link last"><a href="#contact">Contact</a></li>
                <li class="dropdown quick-enquiry">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Quick Enquiry
                  </a>
                  <div class="dropdown-menu">
                    Quick Enquiry Form
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        </div>

      </div>
    </div>

    <div class="container marketing">

    <div class="row">

      <header class="homepage_introduction">
        <h1 class="text-center">Looking for a quality property in Glasgow, or are you a property owner and would like advice?</h1>

        <form action="/search" method="get">

        <div class="quick-search clearfix">
          <h3>Quick Search</h3>
          <div class="bedrooms option">
            <label>Bedrooms</label>
            <select name="bedrooms[min]">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>

            <span>&mdash;</span>

            <select name="bedrooms[max]">
              <option value="0">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <div class="bathrooms option">
            <label>Bathrooms</label>
            <select name="bathrooms[min]">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>

            <span>&mdash;</span>

            <select name="bathrooms[max]">
              <option value="0">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="submit">
            <input type="submit" value="Search" />
          </div>
        </div>

        </form>

      </header>

    </div>

    </div>

    <div class="container marketing frontpage-carousel-wrapper">
        <?php include_once('./inc/_frontpage_properties_carousel.php'); ?>
    </div>

      <!-- Main Copy -->
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-8 homepage-content">
          <h2>Welcome to Tay Lettings</h2>

          <p class="lead">Tay Letting Ltd. has rapidly become an established letting and property management brand specialising in the Greater Glasgow area. The attribute which has underpinned our swift rise to prominence in the letting sector has been our ability to turnaround property we have been handed the responsibility to let, almost never breaching a two week period.</p>

          <p>Tay Letting is spearheaded by Marc Taylor and Allan Dowie, both of whom have a combined; experience, knowledge and expertise within the Glasgow area, boasting a proven track record underpinned by the personalised service they are able to provide.</p>
        </div>

        <div class="col-lg-4 homepage-content-sidebar">
          <div class="homepage-content-sidebar--option homepage-content-sidebar--option-tenants">
            <h3>Tenants</h3>
            <p>A great range of properties for let in and around Glasgow.</p>

            <a class="cta cta--normal" href="/tenants/">More Info</a>
          </div>

          <div class="homepage-content-sidebar--option homepage-content-sidebar--option-landlords">
            <h3>Landlords</h3>
            <p>Taking care to find respectable financially suitable tenants.</p>

            <a class="cta cta--white" href="/tenants/">More Info</a>
          </div>
        </div>
      </div>

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4 text-center">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Our Agents will work for you</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="cta cta--underline" href="#" role="b" href="#" role="button">Meet our team</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>We have over 5,000 properties in Glasgow</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="cta cta--underline" href="#" role="button">See our properties</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 value_of_home_block">
          <h3>Interested in the value of your home?</h3>
          <p><strong>If so then feel free to book a free valuation and we’ll make sure that it’s convenient and accurate.</strong></p>
          <p>You can contact us between 8am and 10pm Monday to Friday. Just call <a href="tel:+441413366232">0141 336 6232</a></p>
          <p><a class="cta cta--normal" href="#" role="button">Book now</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <div class="view_available_properties_teaser row text-center">
        <h3>Take a look at our available properties</h3>
        <a class="cta cta--large cta--white" href="/properties">Show Me</a>
      </div>

      <!-- FOOTER -->
      <footer class="row">
        <div class="col-md-8">
          <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="TAY Lettings" /></a>
        </div>
        <div class="col-md-4">
          <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          <p>Tay Letting Limited Copyright © 2009 - 2015</p>
          <p>Company Number SC363881
          <p>Telephone <a href="+441413366232">0141 336 6232</a></p>
          <p>Energised by Maroculous IT Services</p>
        </div>
      </footer>

    </div><!-- /.container -->
  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>

    <script src="/libraries/jQuery.mmenu/dist/js/jquery.mmenu.min.all.js" type="text/javascript"></script>
    <link href="/libraries/jQuery.mmenu/dist/css/jquery.mmenu.all.css" type="text/css" rel="stylesheet" />


    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

    <script>

    $(document).ready(function() {

      $('.quick-enquiry').on('click', function (e) {
        $(this).toggleClass('quick-enquiry-expanded');
      });

      // $('nav#menu').mmenu({
      //   offCanvas: {
      //     position : "right",
      //     clone : true,
      //     openingInterval: 10,
      //     transitionDuration: 300
      //     //zposition : "front"
      //   }
      //  });

      var API = $("nav#menu").data("mmenu");

      $('.close-btn').bind('click', function (e) {
        API.close();
      });

    });

    </script>
  </body>
</html>
