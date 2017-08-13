<?php
/*=== Test Plugin ===
Plugin Name: Plugin version 0.0.1
Plugin URI:  https://no-url-yet.com
Description: This is just a plugin test1
Version:    0.01
Author:      ioanachi
Text Domain: wporg
Domain Path: /languages
*/
add_action ("the_content", 'change' );

function change ($content){
if( !is_page() ){
  $content = 'Nothing to see here';
}


return $content;
}










//
// echo ''
// add_action ("all content", 'replacepage');
// function replacepage ($content){
// $content = 'NOTHING TO SEE HERE';
// return $content;
// }
?>
