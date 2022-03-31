# Tarea 1 de COM350: Pruebas Unitarias para Laravel

## Ejecutar proyecto

### Clonar repositorio

```bash
git clone https://github.com/fermelli/laravel-testing
```

### Instalar dependencias

```bash
composer install
```

## Pruebas en Laravel

[Laravel](https://laravel.com/) está construido pensando en las pruebas. De hecho, el soporte para pruebas con `PHPUnit` se incluye de forma inmediata (out of the box) y ya se ha configurado un archivo `phpunit.xml` para su aplicación.

`PHPUnit` es un marco de prueba orientado al programador para PHP. Es una instancia de la arquitectura xUnit para marcos de pruebas unitarias.

De forma predeterminada, el directorio tests de su aplicación Laravel contiene dos directorios: `Feature` y `Unit`. Las pruebas unitarias son pruebas que se enfocan en una porción muy pequeña y aislada de su código. De hecho, la mayoría de las pruebas unitarias probablemente se centren en un solo método.

Se debe ejecutar los comandos `vendor/bin/phpunit` o `php artisan test` para ejecutar las pruebas.

## Ambientes (Environments)

Se puede crear un archivo `.env.testing` en la raíz de su proyecto. Este archivo se usará en lugar del archivo `.env` cuando se ejecuten pruebas de `PHPUnit`.

## Creación de pruebas

Para crear un nuevo caso de prueba, use el comando de Artisan `make:test`. De forma predeterminada, las pruebas se colocarán en el directorio `tests/Feature`:

```bash
php artisan make:test UserTest
```

Si desea crear una prueba dentro del directorio `tests/Unit`, puede usar la opción `--unit` al ejecutar el comando `make:test`:

```bash
php artisan make:test UserTest --unit
```

Una vez que se ha generado la prueba, puede definir los métodos de prueba como lo haría normalmente con `PHPUnit`.

## Ejecución de pruebas

Como se mencionó anteriormente, una vez que haya escrito las pruebas, puede ejecutarlas usando `PHPUnit`:

```bash
./vendor/bin/phpunit
```

Además del comando phpunit, puede usar el comando `test` para ejecutar las pruebas. El corredor de pruebas de Artisan proporciona informes de prueba detallados para facilitar el desarrollo y la depuración:

```bash
php artisan test
```
