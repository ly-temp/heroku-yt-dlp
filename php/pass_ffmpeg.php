<?php
  chdir("../");
  $ffmpeg_target = $_GET['target'];
  exec('bash/create_filelist.sh '.'"https://'.$_SERVER['SERVER_NAME'].'/downloads/"');

  if(isset($_GET['target'])){
    $href = $ffmpeg_target."?url=https://".$_SERVER['SERVER_NAME']."/filename.list";
    echo '<head><meta http-equiv="refresh" content="0; url='.$href.'" /></head>';
  }else{
    echo '<head><meta http-equiv="refresh" content="0; url=/filename.list" /></head>';
    $href = "/";
  }
  echo '<a href=".$href.">redirect</a>';
?>
