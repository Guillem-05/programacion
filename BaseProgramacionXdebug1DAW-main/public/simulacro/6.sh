#!/bin/bash
madrid=0
barcelona=0
sevilla=0
vitoria=0
valencia=0


for line in $(cat datos.txt); do
    city=$(echo $line | cut -d',' -f3)
    case $city in
        Madrid) ((madrid++)) ;;
        Barcelona) ((barcelona++)) ;;
        Sevilla) ((sevilla++)) ;;
        Vitoria) ((vitoria++)) ;;
        Valencia) ((valencia++)) ;;
    esac
done < datos.txt

echo "Madrid: $madrid"
echo "Barcelona: $barcelona"
echo "Sevilla: $sevilla"
echo "Vitoria: $vitoria"
echo "Valencia: $valencia"
