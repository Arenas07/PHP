# Guía de PHP: De Básico a Avanzado

Este documento cubre desde los fundamentos hasta temas más avanzados de PHP. Ideal para estudiantes, autodidactas o desarrolladores que quieren repasar el lenguaje.

---

## 📌 Índice

1. [¿Qué es PHP?](#qué-es-php)
2. [Instalación de PHP](#instalación-de-php)
3. [Instalación de XAMPP](#instalación-de-xampp)
4. [Cómo correr PHP sin XAMPP](#cómo-correr-php-sin-xampp)

---

## ¿Qué es PHP?

PHP es un lenguaje de programación del lado del servidor diseñado especialmente para el desarrollo web. Permite generar contenido dinámico, gestionar bases de datos, sesiones y más.

---

## Instalación de PHP

### 🔹 Windows

1. Descarga PHP desde [https://windows.php.net/download/](https://windows.php.net/download/).
2. Extrae el ZIP en una carpeta como `C:\php`.
3. Agrega la ruta `C:\php` a las variables de entorno (`PATH`).
4. Verifica la instalación:

```bash
php -v
```

Deberías ver algo como:

```
PHP 8.x.x (cli) (built: ...)
```

---

### 🔹 Linux (Ubuntu/Debian)

1. Abre una terminal y ejecuta:

```bash
sudo apt update
sudo apt install php
```

2. Verifica que PHP esté instalado:

```bash
php -v
```

3. Crea un archivo de prueba:

```bash
echo "<?php echo 'Hola desde PHP'; ?>" > index.php
```

4. Lanza el servidor embebido:

```bash
php -S localhost:8000
```

Luego abre tu navegador y entra a `http://localhost:8000`.

---

## Instalación de XAMPP

### 🔹 Windows

1. Descarga el instalador desde [https://www.apachefriends.org](https://www.apachefriends.org).
2. Ejecuta el instalador y sigue los pasos.
3. Abre el **Panel de Control de XAMPP** y enciende los módulos `Apache` y `MySQL`.
4. Coloca tus archivos PHP dentro de la carpeta `htdocs`, por ejemplo:

```
C:\xampp\htdocs\mi_proyecto\index.php
```

5. Accede desde el navegador con:

```
http://localhost/mi_proyecto/
```

---

### 🔹 Linux

1. Descarga el instalador desde [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html) o con:

```bash
wget https://www.apachefriends.org/xampp-files/8.2.12/xampp-linux-x64-8.2.12-0-installer.run
```

2. Hazlo ejecutable:

```bash
chmod +x xampp-linux-x64-8.2.12-0-installer.run
```

3. Ejecuta el instalador:

```bash
sudo ./xampp-linux-x64-8.2.12-0-installer.run
```

4. Inicia XAMPP:

```bash
sudo /opt/lampp/lampp start
```

5. Verifica en el navegador:

```
http://localhost
```

6. Tus proyectos van en:

```
/opt/lampp/htdocs/
```

---

## Cómo correr PHP sin XAMPP

Si ya tienes PHP instalado, puedes usar su servidor embebido (desde PHP 5.4 en adelante):

1. Abre una terminal y ubícate en la carpeta donde tengas tu archivo `.php`.
2. Ejecuta:

```bash
php -S localhost:8000
```

3. Visita `http://localhost:8000` en tu navegador.

Esto sirve para pruebas rápidas sin necesidad de instalar Apache ni XAMPP.

---

