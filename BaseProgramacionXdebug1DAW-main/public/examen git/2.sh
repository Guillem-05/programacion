#!/bin/bash

numero=$((RANDOM % 100 + 1))

while true; do
    read -p "Adivina el número (1-100): " user
    
    if [ "$user" -eq "$numero" ]; then
        echo "¡Correcto! El número era $numero."
        break
    elif [ "$user" -lt "$numero" ]; then
        echo "El número es mayor."
    else
        echo "El número es menor."
    fi
done
