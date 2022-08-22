#!/bin/bash
# Rename all JPG files
COUNT=0
ls *.jpg *.jpeg | while read FILE
do
   let COUNT++
   NEW="principal$(printf %04d $COUNT).jpg"
   mv "$FILE" "$NEW" -v
   #echo "COUNT=$COUNT --- NEW=$NEW --- FILE=$FILE"
done

