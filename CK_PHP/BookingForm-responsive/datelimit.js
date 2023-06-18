<script>
  var datePicker = document.getElementById("datePicker");
  var currentDate = new Date().toISOString().split("T")[0];
  datePicker.min = currentDate;
</script>
