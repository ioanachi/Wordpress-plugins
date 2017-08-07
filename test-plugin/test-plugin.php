<?php
/*
Plugin Name: Test Plugin test
Plugin URI:  https://no-url-yet.com
Description: This is just a plugin test
Version:     1.0
Author:      ioanachi
Text Domain: wporg
Domain Path: /languages
*/

add_action('the_title','schimbam_titlurile');

function schimbam_titlurile($title){

  $rezultat = 'numere: ';
  $a = 0;
  while ($a <= 10) {
    $rezultat = $rezultat.$a;
    $a++;
  }
  $rezultat = $rezultat.$title;
  return $rezultat;
}
