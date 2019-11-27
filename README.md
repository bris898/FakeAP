# FakeAP
Progetto sviluppato da alcuni studenti dell'ITS A. Rizzoli in occasione del Job & Orienta 2019.

## Configurazione (per Debian-based)
Modificare il file _/etc/hostname_ e riavviare il daemon networking:
```
veronafiere-wifi

sudo systemctl restart networking
```


Installare il web server Apache2, PHP e MySQL (o MariaDB):
```
sudo apt install apache2 php php-mysql mariadb-server
```
Copiare il contenuto della cartella _apache_ dentro la cartella _/etc/apache2/sites-enabled_

Abilitare la mod _Rewrite_ di Apache2: 
```
sudo a2enmod rewrite && systemctl restart apache2
```
Copiare il contenuto della cartella _www_ nella cartella _/var/www/html_.

Modificare il file _/etc/hosts_:
```
10.42.0.1      clients3.google.com connectivitycheck.gstatic.com connectivitycheck.android.com
10.42.0.1      captive.apple.com  www.msftconnecttest.com www.msftncsi.com
```
Creare il database, con l'utente e la tabella necesseria e importare i dati di sample come specificato nel file _import.sql_
```
sudo mysql -u root -p < import.sql
```

Creare un file di connessione dal Manager delle connessioni e poi abilitare l'hotspot dal Network Manager.


Non sarà riconosciuto ogni abuso illecito del seguente progetto.