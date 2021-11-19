<?php 
require 'autoload.php';
$d2i = new Data2Insights\Client('3','$2y$10$hmDp2maWN5GzAUKzXcc8b.P7PiK4pvrNKgVxmVJeh93FghXOSKarO','bmekala@aadhya-analytics.com');

   $d2i->text->sentiment('hi');
   ?>