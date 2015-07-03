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

// Make this 9 properties.
// array_pop($json_a['Results']);

// print_r($json_a['Results']);

// foreach($json_a['Results'] as $i => $propertyInfo) {

// }

function displaySlide($slide) {
  // print_r($slide);
  global $twig;

  // Lets make Rent a bit more human friendly than an integer.
  $slide['Rent'] = _format_money($slide['Rent']);

  echo $twig->render('frontpage_properties_carousel--item.html', $slide);
}

?>

<div class="row-fluid">

<div class="span12">

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

</div>

</div>
</div>
