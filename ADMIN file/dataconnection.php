<?php

$connect = mysqli_connect("localhost","root","","gty_hotel");

if($connect)
{
  echo("Connect successfully!");
}
else{
  echo("!--ERROR--!");
}

?>