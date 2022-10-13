# 1º Parcial UTNFRMDP - PHP

### Consigna:

Un almacén cervecero de la ciudad nos solicita comenzar con el desarrollo de una aplicación que les permita
administrar su pizarra de cervezas.
Como primera fase de desarrollo necesitamos realizar el Login de la aplicación y el ABM de Cervezas.

1. Generar las clases indicadas en el Diagrama utilizando los principios de POO que consideres necesarios.
2. Implementar el **Login** de la aplicación:
    * El usuario debe iniciar sesión en la aplicación con el usuario **user@myapp.com** y password **123456**
    * Validar los datos de acceso contra el json de usuarios.
    * Proteger el resto de las páginas internas para evitar el acceso sin autenticación, utilizando **SESSION**.
    Si se trata de acceder a una página interna sin iniciar sesión, se debe redireccionar al index
3. Implementar el **Add Form** de Cervezas:
    * Solicitar los campos del form al usuario. Todos los campos son requeridos
    * El campo Tipo (BeerType) debe popular los distintos tipos de cerveza que se encuentran en el json
    de Beer Types.
    * Se debe persistir en el json de Beer.
4. Implementar el **List Form** de Cervezas:
    * Mostrar el listado de Cervezas con su Tipo (mostrando el Description y no el BeerTypeId) Id, Nombre,
    IBU y Precio. 

**Nota:** Se provee el Template HTML para realizar la aplicación, el cual deberá adaptarse indicando action y method
del post, name de los controles y rutas de los botones del menú de navegación.
Se proveen jsons con inserción de BeerTypes y Users.
Se debe utilizar el Framework provisto.

### Modelos:
```js
Beer {
    beerId,
    beerTypeId,
    name,
    ibu,
    price
}
```

```js
BeerType {
    beerTypeId,
    description
}
```

```js
User {
    userId,
    email,
    password
}
```