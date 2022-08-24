#!/bin/bash
#input: [url] [audio_only?] [format]
if [ "$2" = "1" ]; then
  output=$(../yt-dlp.sh "$1" -f "bestaudio[ext=webm]/bestaudio[ext=m4a]")
else
  if [ "$3" = "" ]; then
    output=$(../yt-dlp.sh "$1")
  else
    output=$(../yt-dlp.sh "$1" -f "$3")
  fi
fi
filename=$(echo "$output" | grep "Destination:" | grep -o ":.*" | cut -d":" -f2-);
#printf "$filename\n" >> ~/log.txt
#prevent invalid url

#if [[ $filename = *\"* || $filename = *“* || $filename = *”* || $filename = *＂* ]]; then
#   mv "$filename" "$(echo "$filename" | sed -E 's/"|“|”|＂//g' )"
#fi
#if [[ $filename = \ * || $filename = *\  ]]; then
#   mv "$filename" "$(echo "$filename" | sed -E 's/(^[ ]+|[ ]+$)//g' )"
#fi
#$(printf "$filename\n" >> ../complete.list)
#$(printf "$output\n" >> ../log.txt)
