# Cambio de Malsonantes

Este script en PHP proporciona una función para reemplazar palabras malsonantes por sus eufemismos en un texto. Se utiliza el filtro `the_content` de WordPress para aplicar automáticamente este reemplazo al contenido.

## Función `cambioDeMalsonantes`

La función `cambioDeMalsonantes` toma un texto como parámetro y realiza el reemplazo de las palabras malsonantes por sus eufemismos. Aquí están los pasos clave:

```php
function cambioDeMalsonantes($text) {
    // Array de palabras malsonantes
    $bad_words = array(
        'puta',
        'putos',
        'mierda',
        'mierdecillas',
        'mierdecitas',
        'mierdecita',
        'mierdón'
    );

    // Array de eufemismos para sustituir las malsonantes
    $good_words = array(
        'trabajadora sexual ',
        'trabajadores sexuales',
        'caca',
        'cacas',
        'caquitas',
        'caquita',
        'caca'
    );

    // Reemplazar las palabras malsonantes por sus eufemismos en el texto
    return str_replace($bad_words, $good_words, $text);
    }
    // Aplica la función cambioDeMalsonantes al contenido usando el filtro the_content
    add_filter( 'the_content', 'cambioDeMalsonantes' );

```