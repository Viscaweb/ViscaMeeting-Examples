#!/bin/bash

DIRECTORY=/tmp/fake-files
if [ ! -d "$DIRECTORY" ]; then
	mkdir $DIRECTORY
fi

for (( c=1; c<=50000; c++ ))
do
	touch $DIRECTORY/$c.file
done