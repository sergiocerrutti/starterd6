<?php
/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	Variables que podemos utilizar:
 *	- $content: Todos los comentarios. También incluye paginación y otros elementos (dependiendo de cómo esté configurado en el tipo de contenido).
 *
 *	Objetos extra:
 *	- $node: Tenemos acceso a toda la información del nodo del que estamos viendo los comentarios. En principio no nos sirve de mucho pero quién sabe...
 *
 *	Además tenemos acceso al valor de tres constantes que definen el formato que escogimos en la configuración para mostrar los comentarios:
 *	- $display_mode:
 *  	- COMMENT_MODE_FLAT_COLLAPSED
 *  	- COMMENT_MODE_FLAT_EXPANDED
 *  	- COMMENT_MODE_THREADED_COLLAPSED
 *  	- COMMENT_MODE_THREADED_EXPANDED
 *	- $display_order:
 *  	- COMMENT_ORDER_NEWEST_FIRST
 *  	- COMMENT_ORDER_OLDEST_FIRST
 *	- $comment_controls_state:
 *  	- COMMENT_CONTROLS_ABOVE
 *  	- COMMENT_CONTROLS_BELOW
 *  	- COMMENT_CONTROLS_ABOVE_BELOW
 *  	- COMMENT_CONTROLS_HIDDEN
 *	
 *	Más info:
 *	http://api.drupal.org/api/drupal/modules--comment--comment-wrapper.tpl.php/6
 */
?>

<ul id="comments">
  <?php print $content; ?>
</ul>