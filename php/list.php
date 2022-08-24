<?php
  $download_path = "/downloads/";

  chdir("../");
  $output = shell_exec("bash/create_filelist.sh");
  $file_arr = explode("\n", $output);
  array_pop($file_arr);

  foreach($file_arr as $filename){
    
    echo '<a href="'.$GLOBALS['download_path'].$filename.'" download>'.$filename.'</a>';
    echo "&#160;&#160;";

    echo '<a href="'.$GLOBALS['download_path'].$filename.'">preview</a>';

    echo "<br>";
  }
?>

<br>
<a href="/filename.list">pure txt list</a>
<br>
<a href="/php/pass_ffmpeg.php">full url list</a>
<br><br>
<a href="/php/clear.php">clear</a>
<br><br>
<a href="/">back</a>
<br>

<form action="/php/pass_ffmpeg.php" method="get">
  <input name="target" value="https://kljlkasjdfoiausdofiuaoisdufasd.herokuapp.com/download_external.php">
  <button type="submit">pass ffmpeg</button>
</form>

