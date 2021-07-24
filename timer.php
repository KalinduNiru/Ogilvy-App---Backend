<?php

session_start();
$link = mysqli_connect("localhost","root", "root");
mysqli_select_db($link,"ogilvy");

$duration = "";
$res = mysqli_query($link,"SELECT * FROM time");

while($row = mysqli_fetch_array($res)){
    $duration=$row["duration"];
}

$_SESSION["duration"] = $duration;
$_SESSION["start_time"] = date("Y-m-d H:i:s");

$end_time =$end_time = date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));

$_SESSION["end_time"] =$end_time;

?>

<script type= "text/javascript">
window.location="index.php"
</script>

