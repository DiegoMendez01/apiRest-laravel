# API REST de Gestión de Clientes y Facturas

_API desarrollada por Diego Mendez Rojas_

## Comenzando 🚀

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

### Pre-requisitos 📋

Para poder inicializar el sistema se requiere lo siguiente:

```
1. PHP >= 7.4
2. Composer
3. Laravel CLI
4. Postman
```

### Construido con 🛠️

_Las herramientas utilizadas son las siguientes_

* [Eclipse PHP Developers](https://www.eclipse.org/downloads/packages/release/helios/sr2/eclipse-php-developers) - Editor de Codigo
* [Git](https://git-scm.com/) - Manejador de Versiones
* [Composer](https://getcomposer.org/download/) - Instalador de paquetes
* [XAMPP Control](https://www.apachefriends.org/download.html) - Panel de control de servidor PHP
* [Postman](https://www.postman.com/downloads/) - Pruebas de la API

## Instalación 🔧

1. Debes tener instalado XAMPP

2. Una vez instalado dirigirte a la carpeta htdocs

```
xampp\htdocs\
```

3. Debes clonar el repositorio utilizando el manejador de versiones Git Bash

### `git clone https://github.com/DiegoMendez01/apiRest-laravel/tree/develop`

4. Navega al directorio del proyecto:

```
cd apiRest-laravel
```

5. Instala las dependencias necesarias:

```
composer install
```

6. Ejecuta las migraciones para crear las tablas en la base de datos:

```
php artisan migrate
```

7. Opcional: Ejecuta los seeders para poblar la base de datos con datos de prueba:

```
php artisan db:seed
```

## Uso 📋

### Autenticación

La API utiliza Laravel Sanctum para la autenticación. Puedes autenticarte enviando una solicitud POST a la ruta `/setup` para generar las credenciales de usuario.

### Endpoints

- `/api/v1/customers`: Obtiene la lista de clientes.
- `/api/v1/customers/{id}`: Obtiene un cliente específico por su ID.
- `/api/v1/invoices`: Obtiene la lista de facturas.
- `/api/v1/customers?includeInvoices=true`: Obtiene los clientes con sus facturas
- `/api/v1/customers?status[eq]=B&includeInvoices=true`: Obtiene los clientes con sus facturas y segun el estado
- `/api/v1/customers/{id}?status[eq]={status}&includeInvoices=true`: Obtiene un cliente por su ID con sus facturas y segun el estado

## Construido con 🛠️

- Laravel
- Composer

## Filtrado de URL 📋

Para conocer los filtros disponibles en la URL de la API, consulta la carpeta app/filters. Aquí encontrarás información sobre los filtros disponibles para clientes e invoices.

## Author

* **Diego Mendez Rojas** - *Desarrollador Web* - *Repositorio GitHub* - [DiegoMendez01](https://github.com/DiegoMendez01)