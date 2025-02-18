#!/bin/bash
viejo_name=""
viejo_age=0
joven_name=""
joven_age=200

for line in $(cat datos.txt); do
    name=$(echo $line | cut -d',' -f1)
    age=$(echo $line | cut -d',' -f2)
    
    if [ $age -gt $viejo_age ]; then
        viejo_name=$name
        viejo_age=$age
    fi
    
    if [ $age -lt $joven_age ]; then
        joven_name=$name
        joven_age=$age
    fi
done

echo "Persona más mayor: $viejo_name, $viejo_age años"
echo "Persona más joven: $joven_name, $joven_age años"
