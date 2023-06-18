<?php

$connect=mysqli_connect("localhost","root","","gty");

if($connect)
{
  echo("Connect successfully!");
}

else
{
  echo ("Error");
}

?>