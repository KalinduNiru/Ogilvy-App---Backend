<?php
session_start();
?>

<center>
<div id="timeres" style="font-size :100px;"></div>
</center>

<script type ="text/javascript">
setInterval(() => {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","response.php",false);
    xmlhttp.send(null);
    document.getElementById("timeres").innerHTML=xmlhttp.responseText;

}, 1000);
</script>