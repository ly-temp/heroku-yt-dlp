<?php
  chdir("../");
  exec("chmod +x bash/*.sh");
  exec("mkdir -p downloads");
  chdir("downloads");
  if(isset($_GET['url'])){
    $url_split = explode(";", $_GET['url']);
    foreach($url_split as $url){
      $audio_only = ($url[0] === '!' || $_GET['audio_only'] == 1) ? 1 : 0;
      $this_url = $url[0] === '!' ? substr($url, 1) : $url;
      exec('../bash/my_yt-dlp.sh "'.$this_url.'" '.$audio_only.' "'.$_GET['format'].'" >/dev/null 2>/dev/null &');
    }
    if(isset($_GET['time'])){
      //sleep($_GET['time']);
    }    
  }else{
    echo "NO url detected!";
  }
  echo '<a href="list.php">show downloads</a><br><a href="/">back</a>'
?>
