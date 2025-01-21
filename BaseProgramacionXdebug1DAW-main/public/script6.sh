#!/bin/bash

while true; do
    echo "Menú de opciones:"
    echo "1) Buscar por título"
    echo "2) Buscar por año"
    echo "3) Buscar por editorial"
    echo "4) Buscar por género"
    echo "5) Insertar libro"
    echo "6) Salir"
    read -p "Selecciona una opción: " opcion

    case $opcion in
        1)
            read -p "Introduce el título a buscar: " titulo
            grep -i "$titulo" bdlibros.txt || echo "No se encontró el libro."
            ;;
        2)
            read -p "Introduce el año a buscar: " año
            grep -i "$año" bdlibros.txt || echo "No se encontró