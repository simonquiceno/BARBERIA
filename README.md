# BARBERIA

**Proyecto Laravel Barbería**

Este proyecto es una aplicación web desarrollada en **Laravel** para gestionar una barbería, que permite a los administradores controlar aspectos como barberos, servicios, citas, productos y proveedores. Los clientes pueden realizar reservas de citas, explorar productos y servicios.

## Funcionalidades Principales

- **Gestión de Barberos**: Agregar, editar y eliminar barberos.
- **Gestión de Servicios**: Registrar y gestionar los servicios ofrecidos por la barbería.
- **Gestión de Citas**: Los clientes pueden reservar citas con barberos, elegir servicios y especificar fecha y hora.
- **Gestión de Productos**: Registrar productos vendidos en la barbería.
- **Gestión de Proveedores**: Administrar proveedores de productos.
- **Roles de Usuario**: Definir roles como "Administrador" y "Cliente" para controlar el acceso a funcionalidades.

## Estructura de la Base de Datos

- **users**: Información de los usuarios registrados.
- **barberos**: Datos de los barberos.
- **servicios**: Servicios ofrecidos en la barbería.
- **citas**: Citas reservadas por los clientes, asociadas a barberos y servicios.
- **productos**: Productos vendidos en la barbería.
- **proveedores**: Información sobre los proveedores de productos.
- **roles**: Roles asignados a los usuarios.

## Relaciones entre las Tablas

- **Usuarios (users)**: Relación uno a muchos con **Citas (citas)**.
- **Barberos (barberos)**: Relación uno a muchos con **Citas (citas)**.
- **Servicios (servicios)**: Relación muchos a muchos con **Citas (citas)** a través de **cita_servicio**.
- **Proveedores (proveedores)**: Relación uno a muchos con **Productos (productos)**.

## Cómo Funciona la Aplicación

### Para Clientes:
- **Reservar Citas**: Los clientes pueden elegir barberos, servicios, y programar citas.
- **Explorar Servicios y Productos**: Los clientes pueden ver detalles y precios de los servicios y productos ofrecidos.

### Para Administradores:
- **Gestionar Barberos, Servicios, Citas y Productos**: Los administradores tienen acceso completo para añadir, modificar o eliminar estos elementos.
- **Gestionar Proveedores**: Administrar información sobre proveedores de productos.
- **Roles de Usuario**: Asignar y gestionar roles de usuario.

## Tecnologías Utilizadas

- **Laravel** (Backend)
- **MySQL** (Base de datos)
- **Blade** (Motor de plantillas)
- **Livewire** (Interactividad en tiempo real)

