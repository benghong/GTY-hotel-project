<?php


$connect = mysqli_connect("localhost","root","","gtyhotel");

if($connect)
{
  echo("Connect successfully!");
}
else{
  echo("!--ERROR--!");
}

?>
