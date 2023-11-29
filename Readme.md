# Plugin Words Of Humanity

---

## Descripción

El plugin Words of Humanity es un simple plugin de WordPress creado por Gonzalo Arca. Reemplaza algunas palabras malsonantes con eufemismos.

## Características

- Reemplaza las palabras malsonantes con eufemismos.
- Agrega un toque de aleatoriedad a tu contenido.

## Instalación

1. Descarga el archivo ZIP del plugin desde [WordPress Plugin Repository](http://wordpress.org/plugins/words/).
2. Sube el archivo ZIP a tu sitio de WordPress y activa el plugin.

## Uso

El plugin funciona reemplazando palabras malsonantes con eufemismos. Así es como funciona:

1. El plugin define dos matrices: una con palabras malso.
2. El orden de los nombres de lugares se aleatoriza utilizando la función `shuffle()`.
3. La función `renym_wordpress_typo_fix` utiliza `str_replace` para reemplazar las palabras malsonantes con eufemismos.
4. La función `add_filter` conecta esta función de reemplazo al filtro `the_content`, asegurando que se ejecute al mostrar el contenido.

¡Siéntete libre de personalizar las matrices con tus propias palabras malsonantes para crear una experiencia única de cambio de palabras!

## Detalles del Plugin

- **Nombre del Plugin:** Words of Humanity
- **URI del Plugin:** [http://wordpress.org/plugins/words/](http://wordpress.org/plugins/words/)
- **Autor:** Gonzalo Arca
- **URI del Autor:** [https://ma.tt/](https://ma.tt/)
- **Versión:** 1.1

    // Reemplazar las palabras malsonantes por sus eufemismos en el texto
    return str_replace($bad_words, $good_words, $text);
    }
    // Aplica la función cambioDeMalsonantes al contenido usando el filtro the_content
    add_filter( 'the_content', 'cambioDeMalsonantes' );

```
