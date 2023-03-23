<?php

$mass = array(4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2);

$result = array_map(function (int $element) {
   print_r($element);
   if ($element & 1) {
      return "{$element} - нечетное число";
   } else {
      return "{$element} - четное число";
   }
}, $mass);

print_r($result);
