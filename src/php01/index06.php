<?php
function
squarearea($bottom, $height)
{
  return $bottom * $height;
}
function
trianglearea($bottom, $height)
{
  return  $bottom * $height / 2;
}
function trapezoidarea($bottom, $top, $height)
{
  return ($bottom + $top) * $height / 2;
}


echo squarearea(3, 5) ."<br />";
echo trianglearea(3, 5) . "<br />";
echo trapezoidarea(3, 2, 5);
