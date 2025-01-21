#!/bin/bash

while true; do
    read -p "Introduce un valor mayor que 0: " valor
    if [[ "$valor" =~ ^[0-9]+$ ]] && [ "$valor" -gt 0 ]; then
        if [ $((valor % 2)) -eq 0 ]; then
            echo "El número $valor es par."
        else
            echo "El número $valor es impar."
        fi
        break
    else
        echo "Por favor, introduce un número válido mayor que 0."
    fi
done