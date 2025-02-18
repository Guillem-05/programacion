#!/bin/bash

if [ "$#" -ne 1 ]; then
    echo "Error: Debes proporcionar una ciudad como parámetro."
    exit 1
fi

ciudad=$1
count=0

for line in $(cat datos.txt); do
    current_ciudad=$(echo $line | cut -d',' -f3)
    if [ "$current_ciudad" = "$ciudad" ]; then
        count=$((count + 1))
    fi
done

echo "Número de personas en $ciudad: $count"
