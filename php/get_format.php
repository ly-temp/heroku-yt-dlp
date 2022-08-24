
<head><meta http-equiv="refresh" content="0; url=/format.out" /></head>
<a href="/format.out">redirect</a>
<?php
  chdir("../");
  if(isset($_GET["url"])){
    $output = shell_exec('./yt-dlp.sh -F '.$_GET["url"].' > format.out 2>&1 &');
    //echo "<pre>".$output."</pre>";
  }
?>
