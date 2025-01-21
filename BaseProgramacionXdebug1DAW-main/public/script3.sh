#!/bin/bash

if [ $# -eq 0 ]; then
    echo "Uso: $0 <valor_mayor_que_0>"
    exit 1
fi

valor=$1

if [[ "$valor" =~ ^[0-9]+$ ]] && [ "$valor" -gt 0 ]; then
    for ((i=0; i<=valor; i++)); do
        echo $i
    done
else
    echo "El valor debe ser un número mayor que 0."
    exit 1
fi