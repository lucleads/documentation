# Cómo crear servidores virtuales Apache

1. EN ARCHIVO HOSTS

````bash
C:\Windows\System32\drivers\etc
````

- Crear una línea como la de test por cada página que vamos a alojar

````bash
127.0.0.1 local.MIWEB.com
````

2. EN ARCHIVO APACHE VHOSTS

````bash
C:\xampp\apache\conf\extra
````

- Crear un servidor virtual por cada página

````bash
<VirtualHost *:80>
	DocumentRoot "C:/xampp/php/MIWEB"
	ServerName local.MIWEB.com
</VirtualHost>
````

3. EN XAMPP, REINICIAR SERVICIO APACHE

- En caso de que ya tengamos XAMPP abierto, paramos el servicio de Apache y lo volvemos a iniciar.

4. EN PREPROS

````bash
Settigs > Live Preview > Custom Server
````

- Tickamos "Use Custom Server" e indicamos en el campo Server Url el nombre que hemos puesto como ServerName (local.MIWEB.com)

Cambiar **MIWEB** por el nombre del proyecto.
Cambiar **la ruta de DocumentRoot** para que coincida con la de la carpeta donde se aloja la web.