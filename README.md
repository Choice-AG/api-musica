
# API de Usuarios

Esta API proporciona endpoints para la gestión de música.

## Instalación

Para instalar las dependencias del proyecto, ejecuta el siguiente comando:

```
composer install
```

Crear la base de datos

```sql
CREATE DATABASE api_musica;
```

Usar la base de datos recién creada

```sql
USE api_musica;
```

Crear la tabla 'music' con los campos especificados

```sql
CREATE TABLE music (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    artist VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    year INT NOT NULL
);
```

## Iniciar el servidor

Para iniciar el servidor, ejecuta el siguiente comando:

```
php -S localhost:8000 -t ./public
```

## Métodos Disponibles

### GET `/api/music`

Este endpoint devuelve todos la música almacenada en la base de datos.

Ejemplo de uso:

```bash
curl http://localhost:8000/api/music
```

### GET `/api/music/{id}`

Este endpoint devuelve la música con el id especificado.

Ejemplo de uso:

```bash
curl http://localhost:8000/api/music/1
```

### POST `/api/music`

Este endpoint crea un nuevo registro de música en la base de datos.

Ejemplo de uso:

```bash
curl -X POST -H "Content-Type: application/json" -d '{"title":"Canción 1", "artist":"Artista 1", "genre":"Género 1", "year":2021}' http://localhost:8000/api/music
```
Otra forma de hacerlo es con el comando:
```bash
curl -d "title=Canción 1&artist=Artista 1&genre=Género 1&year=2021" http://localhost:8000/api/music
```

### PUT `/api/music/{id}`

Este endpoint actualiza un registro de música específico almacenado en la base de datos.

Ejemplo de uso:

```bash
curl -X PUT -H "Content-Type: application/json" -d '{"title":"Canción 2", "artist":"Artista 2", "genre":"Género 2", "year":2022}' http://localhost:8000/api/music/1
```
Otra forma de hacerlo es con el comando:
```bash
curl -X PUT -d "title=Canción 2&artist=Artista 2&genre=Género 2&year=2022" http://localhost:8000/api/music/1
```

### DELETE `/api/music/{id}`

Este endpoint elimina un registro de música específico almacenado en la base de datos.

Ejemplo de uso:

```bash
curl -X DELETE http://localhost:8000/api/music/1
```
