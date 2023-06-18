<script>
  var currentTime = new Date();
  var hours = currentTime.getHours();
  var minutes = currentTime.getMinutes();

  // Formatting the current time
  if (minutes < 10) {
    minutes = "0" + minutes;
  }

  // Setting the minimum and maximum time values
  document.getElementById("time").min = hours + ":" + minutes;
  document.getElementById("time").max = "23:59";
</script>