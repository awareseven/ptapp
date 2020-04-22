# ptapp
Pentest App für das eLearning auf dem [Security Campus](https://learning.aware7.de/) der [AWARE7](https://aware7.de/).

## Umfang
In dieser Pentest App können die folgenden Sicherheitslücken geübt werden:
* Cross-Site-Scripting (XSS)
* Open-Redirect
* SQL-Injection (SQLI)
* Local-File-Inclusion (LFI)

## Installation
Der leichteste Weg ptapp zu starten ist mit einem kostenlosen Account bei Heraku. 
1. [Anmelden bei Heraku](https://signup.heroku.com/) und
   [in den Account einloggen](https://id.heroku.com/login)
2. Nun klicken wir auf den folgenden Button
   
[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

Desweiteren kann diese Anwendung auch lokal mit Docker betrieben werden. Dafür reicht nach erfolgreicher [Installation von Docker](https://docs.docker.com/get-docker/) und [Docker-Compose](https://docs.docker.com/compose/install/) der folgenden Befehl im Ordner der Pentest App aus.
```
sudo docker-compose up
```
