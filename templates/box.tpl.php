<?php
/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	Las box son un sinsentido de D6, pero ahí están.
 *	Solo se utilizan en dos ocasiones, para envolver los resultados de búsqueda y para envolver el formulario de comentarios.
 *	
 *	Variables que podemos utilizar:
 *	- $title: Título del box.
 *	- $content: Contenido del box.
 *	
 *	Más info:
 *	http://drupal.org/node/779002
 */
?>

<div class="box">

	<?php if ($title): ?>
  	<h3><?php print $title ?></h3>
	<?php endif; ?>
	
  <div class="content"><?php print $content ?></div>
 
</div>