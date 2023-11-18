#!/bin/bash

# Inicializar el repositorio git
git init

# Agregar todos los archivos al área de staging
# git add .

# Commit inicial
git commit -m "gitbashme"

# Agregar el archivo inicio2.txt y hacer commit
git add gitbashme.sh
git commit -m "gitbashme"

# Intentar hacer un push incorrecto (simulando el error)
git push gitbashme.sh

# Si se utiliza sudo para push (evitar esto, no se recomienda)
sudo git push gitbashme.sh

# Hacer push al repositorio remoto
git push -u origin main
