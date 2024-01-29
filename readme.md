# Projecte M12 SMX2
Aquesta web és el projecte que es fa M12 a Sistemes Microinformàtics i Xarxes. 

Aquest projecte consisteix en fer una pàgina web amb un CRUD de gestió de personatges, dibuixants, i series o pelicues amb:

- HTML
- CSS
- PHP
- MySQL


El projecte es desenvolupara en un entorn Linux, amb les següents eïnes:

- Visual Studio Code
- Dbeaver-ce
- Apache-PHP

## Instal·lació Visual Studio Code

Actualitzar entorn:

> sudo apt update && sudo apt upgrade -y

Instal·lar dependencies:

> sudo apt install software-properties-common apt-transport-https wget -y

Importar repositori:

> wget -O- https://packages.microsoft.com/keys/microsoft.asc | sudo gpg — dearmor | sudo tee /usr/share/keyrings/vscode.gpg

Afegir repositori:

> echo deb [arch=amd64 signed-by=/usr/share/keyrings/vscode.gpg] https://packages.microsoft.com/repos/vscode stable main | sudo tee /etc/apt/sources.list.d/vscode.list

Actualitzar i instal·lar vscode

> sudo apt update

> sudo apt install code

## Instal·lació Dbeaver-ce

## Instal·lació Apache-PHP
