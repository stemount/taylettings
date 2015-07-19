<?php

/* show all frontpage props */

// $json = file_get_contents("http://www.lettingweb.com/digitalapi/jsonsearch?apikey=1261");

// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($json, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);

// foreach ($jsonIterator as $key => $val) {
//     if(is_array($val)) {
//         echo "$key:\n";
//     } else {
//         echo "$key => $val\n";
//     }
// }

// This returns a max of 10 properties.
$json = file_get_contents("http://www.lettingweb.com/digitalapi/jsonsearch?apikey=1261");
$json = json_decode($json, true);

$count = 0;

function displaySlide($slide) {
  // print_r($slide);
  global $twig;

  // Lets make Rent a bit more human friendly than an integer.
  $slide['Rent'] = _format_money($slide['Rent']);

  echo $twig->render('frontpage_properties_carousel--item.html', $slide);
}

?>

<div class="row">

<div id="frontpage_properties_carousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner container" role="listbox">
  <div class="item active row">

    <?php

      $slides = array_slice($json['Results'], 0, 3, true);

      foreach($slides as $i => $slide) {
        displaySlide($slide);
      }

    ?>

  </div>

  <div class="item row">

    <?php

      $slides = array_slice($json['Results'], 3, 3, true);

      foreach($slides as $i => $slide) {
        displaySlide($slide);
      }

    ?>

  </div>

  <div class="item row">

    <?php

      $slides = array_slice($json['Results'], 6, 3, true);

      foreach($slides as $i => $slide) {
        displaySlide($slide);
      }

    ?>

  </div>
  </div>

   <!-- Controls -->
  <a class="left carousel-control" href="#frontpage_properties_carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#frontpage_properties_carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

</div>
