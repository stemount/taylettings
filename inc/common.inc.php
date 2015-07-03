<?php

// Thanks D7.
function _request_path() {
  static $path;

  if (isset($path)) {
    return $path;
  }

  if (isset($_GET['q']) && is_string($_GET['q'])) {
    // This is a request with a ?q=foo/bar query string. $_GET['q'] is
    // overwritten in drupal_path_initialize(), but request_path() is called
    // very early in the bootstrap process, so the original value is saved in
    // $path and returned in later calls.
    $path = $_GET['q'];
  } elseif (isset($_SERVER['REQUEST_URI'])) {
    // This request is either a clean URL, or 'index.php', or nonsense.
    // Extract the path from REQUEST_URI.
    $request_path = strtok($_SERVER['REQUEST_URI'], '?');
    $base_path_len = strlen(rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/'));
    // Unescape and strip $base_path prefix, leaving q without a leading slash.
    $path = substr(urldecode($request_path), $base_path_len + 1);
    // If the path equals the script filename, either because 'index.php' was
    // explicitly provided in the URL, or because the server added it to
    // $_SERVER['REQUEST_URI'] even when it wasn't provided in the URL (some
    // versions of Microsoft IIS do this), the front page should be served.
    if ($path == basename($_SERVER['PHP_SELF'])) {
      $path = '';
    }
  } else {
    // This is the front page.
    $path = '';
  }

  // Under certain conditions Apache's RewriteRule directive prepends the value
  // assigned to $_GET['q'] with a slash. Moreover we can always have a trailing
  // slash in place, hence we need to normalize $_GET['q'].
  $path = trim($path, '/');

  return $path;
}

function _get_request_page_vars() {
  $request_uri = _request_path();

  // return parts of URI split by / e.g. /properties/ID43123
  return explode('/', $request_uri);
}

$loader = new Twig_Loader_Filesystem('templates');

global $twig;

$twig = new Twig_Environment($loader, array(
  'cache' => false,
));

// Thanks https://php.net/manual/en/function.money-format.php#98783.
function _format_money($number, $fractional=false) {
  if ($fractional) {
      $number = sprintf('%.2f', $number);
  }
  while (true) {
      $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
      if ($replaced != $number) {
          $number = $replaced;
      } else {
          break;
      }
  }
  return $number;
}
