# Rumbeate

* [Autor](http://brayanacebo.com)
* [Documentación General del CMS](https://www.pyrocms.com/documentation)
* [Foros Generales](http://forum.pyrocms.com)
* Version: 1.0

## Descripción

Proyecto basico

Si usted desea colaborar por favor comuníquese con el equipo internamente.

## Instalación

Si usted esta viendo esto es por que tiene un minino de permisos de lectura; siendo así puede clonar o descargar el proyecto e iniciar su propia instalación. Dentro encontrara el .sql con la base de datos en un directorio llamado docs y su configuración la puede hacer en system/cms/config/database.php

Instale por favor la base de datos llamada rumbeate.sql, entre a las misma y busque la tabla default_users y edite el primer registro (brayanacebo@gmail.com) con su correo. La clave por defecto es "Colombia"; Asi usted tendrá los accesos de desarrollador.

Es probable que necesite darle permisos a los siguientes directorios-

- system/cms/cache
- system/cms/config
- addons
- assets/cache
- uploads 
- system/cms/config/config.php


### Importante en la instalación

Para que evites un error 404 al querer administrar el Sites Manager debes ir a la base de datos y en la tabla "core_sites" debes editar el domain de tu proyecto. Por ejemplo si lo estas trabajando local puede ser localhost, o si trabajas con vhost puede ser brayan.local o si es tu link final tuproyecto.com

## Actualizar

Recomendamos siempre que usted desee hacer un nuevo proyecto bajar nuevamente el proyecto para que cuente con las actualizaciones que se estarán haciendo continuamente.

## Bugs

* [Issue tracker](https://github.com/brayanacebo-freelance/rumbeate/issues/new)

Antes de informar sobre errores o solicitar cualquier característica, compruebe que no existe ya.
