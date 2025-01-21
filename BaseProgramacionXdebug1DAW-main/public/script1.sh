#!/bin/bash

read -p "Introduce tu nombre: " nombre "
read -p "Introduce tu primer apellido: " apellido1
read -p "Introduce tu segundo apellido: " apellido2

echo "Esperando 5 segundos..."
sleep 5

echo "Tu nombre completo es: $nombre $apellido1 $apellido2"
