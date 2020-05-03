<?php
require "connect.php";
require "create_conn.php";
$sql = "SELECT find_emp('".$_POST["usr_id"]."') AS emp";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$list = explode("|",$row["emp"]);
echo "<div class='user_pn'>
      <div class='name_pn'>".$list[0]."</div>
      <div class='check_in_pn'>".$list[1]."</div>	
      </div>";
?>
