#!/bin/bash

if [ "$#" -ne 2 ]; then
    echo "Error: Se necesitan exactamente dos números como parámetros."
    exit 1
fi
a=$1
b=$2
if [ "$a" -lt "$b" ]; then
    temp=$a
    a=$b
    b=$temp
fi
while [ "$b" -ne 0 ]; do
    remainder=$((a % b))
    a=$b
    b=$remainder
done
echo "El máximo común divisor es: $a"
