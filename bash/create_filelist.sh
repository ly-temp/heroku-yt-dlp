#!/bin/bash
#input [prefix]
ls downloads/ | sed "s|^|$1|g" | tee filename.list
echo "$1" > log.txt
