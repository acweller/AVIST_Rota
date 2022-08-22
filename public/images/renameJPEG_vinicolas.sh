#!/bin/bash
# Rename all JPG files
COUNT=0
ls -tr *.jpg *.jpeg | while read FILE
do
   let COUNT++
   NEW="principal$(printf %04d $COUNT).jpg"
   mv "$FILE" "$NEW" -vi
   #echo "COUNT=$COUNT --- NEW=$NEW --- FILE=$FILE"
done

