<?php
/*
Plugin Name: Words of Humanity
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Gonzalo Arca: Words of Humanity. When activated you will randomly see a lyric from <cite>Words of Humanity</cite> in the upper right of your admin screen on every page.
Author: Gonzalo Arca
Version: 1.7.2
Author URI: http://ma.tt/
*/

function cambioDeMalsonantes( $text ) {

    //array de palabras malsonantes
    $bad_words = array(
        'puta',
        'putos',
        'mierda',
        'mierdecillas',
        'mierdecillas',
        'mierdecita',
        'mierdón');

    //array de eufemismos para sustituir las malsonantes.
    $good_words = array(
        'trabajadora sexual ',
        'trabajadores sexuales',
        'caca',
        'cacas',
        'caquitas',
        'caquita',
        'caca');





return str_replace( $bad_words, $good_words, $text );
}

add_filter( 'the_content', 'cambioDeMalsonantes' );




