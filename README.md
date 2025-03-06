# BARBERIA

**Proyecto Laravel Barbería**

Este proyecto es una aplicación web desarrollada en **Laravel** para gestionar una barbería. La plataforma permite gestionar diferentes aspectos del negocio, como los barberos, los servicios ofrecidos, las citas de los clientes, los productos vendidos, los proveedores de los productos y los roles de usuario. La aplicación está construida para facilitar la administración y proporcionar una experiencia de usuario fluida.

## Funcionalidades Principales

1. **Gestión de Barberos**: Agregar, editar y eliminar barberos, con información como nombre, correo y teléfono.
2. **Gestión de Servicios**: Registrar los servicios ofrecidos por la barbería, junto con su nombre, descripción y precio.
3. **Gestión de Citas**: Permite a los clientes reservar citas con los barberos, especificando la fecha y hora, y qué servicios desean recibir.
4. **Gestión de Productos**: Registrar productos vendidos en la barbería, incluyendo nombre, descripción, precio y proveedor.
5. **Gestión de Proveedores**: Administrar proveedores de productos, incluyendo nombre, teléfono, email y dirección.
6. **Roles de Usuario**: Definir roles de usuario, como "Administrador" y "Cliente", para gestionar el acceso a las distintas funcionalidades del sistema.

## Estructura de la Base de Datos

Las principales tablas que componen la base de datos son las siguientes:

- **users**: Almacena la información de los usuarios registrados.
- **barberos**: Contiene información sobre los barberos de la barbería.
- **servicios**: Lista de servicios que se ofrecen en la barbería.
- **citas**: Contiene las citas que los usuarios han reservado, asociando un usuario, un barbero y los servicios.
- **productos**: Almacena los productos vendidos en la barbería.
- **proveedores**: Información sobre los proveedores de los productos.
- **roles**: Relaciona a los usuarios con su rol (por ejemplo, Admin, Cliente).

### Relaciones entre las Tablas:

- **Usuarios (users)**: Relación uno a muchos con **Citas (citas)**.
- **Barberos (barberos)**: Relación uno a muchos con **Citas (citas)**.
- **Servicios (servicios)**: Relación muchos a muchos con **Citas (citas)** (mediante la tabla pivot **cita_servicio**).
- **Proveedores (proveedores)**: Relación uno a muchos con **Productos (productos)**.
