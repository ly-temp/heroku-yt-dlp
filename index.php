<?php
	exec("[ ! -f init.lock ] && touch init.lock && tar xf yt-dlp-master.tar && mv yt-dlp-master/* . && rm yt-dlp-master.tar");
?>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"></head><body><form action="/php/dl_yt.php" method="get"><label for="url">url: </label><input name="url"><br><label for="time">wait time(in second): </label><input name="time" value="60"><br><label for="audio_only">audio_only(0/1): </label><input name="audio_only"><br><label for="format">format: </label><input name="format"><br><button type="submit">download videos</button></form><br><form action="/php/get_format.php" method="get"><label for="url">query url: </label><input name="url"><br><button type="submit">get formats</button></form><a href="/format.out">format.out</a><br><br><a href="php/list.php">list file</a><br>
For multiple url, use [url];[url];...<br>Time is server waiting time to download video before shutdown<br><br>you can use https://ly-ytdlp.herokuapp.com/dl_yt.php?url=[urls]&amp;time=[time] for simple wget / curl url <br><br>for playlist download: place list id in url box
<br><br>
<a href="/php/note.txt">yt note</a>
</body></html>