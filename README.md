# Business-Administration
Ejercicio Técnico Postulante Summa Solutions - Administración de los empleados de una empresa
### Autor: Luciano Santos
## Ejercicio
Crear las clases necesarias para administrar los Empleados de una Empresa. Cada empleado puede ser de distinto tipo como ser, Programador, Diseñador.


**Estructura de clases:**

**Empresa:**

* Id
* Nombre
* Empleados
**Programador:**

* Id
* Nombre
* Apellido
* Edad
* Lenguaje en el que programa( pueden ser: PHP, NET o Python  )
**Diseñador**

* Id
* Nombre
* Apellido
* Edad
* Tipo de diseñador( pueden ser: Gráfico o Web )

En Empresa, tengo que poder:
* agregar Empleados
* obtener un listado de todos los Empleados
* buscar por Id y obtener un Empleado
* obtener el promedio de edad de los empleados

## Prueba del ejercicio
Para probar el ejercicio se utilizo XAMPP con la base de datos MySql.
En el archivo db-config.php en la carpeta config se configura el acceso a la base de datos, la misma se crea de manera automatica al abrir por primera vez el sitio.

