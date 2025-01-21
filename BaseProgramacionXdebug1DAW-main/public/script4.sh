#!/bin/bash

while true; do
    read -p "Introduce un día del mes (1-30): " dia
    if [[ "$dia" =~ ^[0-9]+$ ]] && [ "$dia" -ge 1 ] && [ "$dia" -le 30 ]; then
        dia_semana=$(( (dia - 1) % 7 ))
        case $dia_semana in
            0) echo "El día $dia es lunes." ;;
            1) echo "El día $dia es martes." ;;
            2) echo "El día $dia es miércoles." ;;
            3) echo "El día $dia es jueves." ;;
            4) echo "El día $dia es viernes." ;;
            5) echo "El día $dia es sábado." ;;
            6) echo "El día $dia es domingo." ;;
        esac
        break
    else
        echo "Por favor, introduce un día válido del mes (1-30)."
    fi
done