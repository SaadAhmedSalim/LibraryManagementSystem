<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, "library");
  $query = "UPDATE admins SET name='$_POST[name]', email='$_POST[email]',mobile='$_POST[mobile]'";
  $query_run = mysqli_query($connection, $query);
 ?>

 <script type="text/javascript">
    alert("Updated Successfully!");
    window.location.href = "admin_dashboard.php";
</script>
