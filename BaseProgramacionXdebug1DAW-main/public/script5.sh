#!/bin/bash

read -p "Introduce el título del libro: " titulo
read -p "Introduce el año de publicación: " año
read -p "Introduce la editorial: " editorial

echo "Selecciona un género:"
echo "1) Ficción"
echo "2) No Ficción"
echo "3) Ciencia"
echo "4) Fantasía"
echo "5) Biografía"
read -p "Introduce el número del género: " genero

case $genero in
    1) genero="Ficción" ;;
    2) genero="No Ficción" ;;
    3) genero="Ciencia" ;;
    4) genero="Fantasía" ;;
    5) genero="Biografía" ;;
    *) echo "Género no válido." ; exit 1 ;;
esac

echo "$titulo, $año, $editorial, $genero" >> bdlibros.txt
echo "Libro añadido correctamente."