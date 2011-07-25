<?php
/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	Variables que podemos utilizar:
 *	- $block->subject: Título del bloque.
 *	- $block->content: Contenido del bloque.
 *	- $block->module: Nombre del módulo que ha generado el bloque (por ejemplo: "user").
 *	- $block->delta: Identificación numérica del bloque en relación al módulo (si el módulo saca varios bloques en una página, tendrá diferente ID).
 *	- $block->region: Nombre de la región en la que está situado el bloque.
 *
 *	Variables extra:
 *	- $block_zebra: Devuelve 'odd' e 'even' teniendo en cuenta los bloques de la región.
 *	- $zebra: Devuelve 'odd' e 'even' sin tener en cuenta los bloques de la región (global).
 *	- $block_id: Identificación numérica del bloque dentro de su misma región.
 *	- $id: Identificación numérica del bloque sin tener en cuenta la región (global).
 *	- $is_front: Devuelve el valor 'true' si el bloque se encuentra en la home.
 *	- $logged_in: Devuelve el valor 'true' si el usuario está logado.
 *	- $is_admin: Devuelve el valor 'true' si el usuario es el Admin.
 *	
 *	Más info:
 *	http://api.drupal.org/api/drupal/modules--system--block.tpl.php/6
 */
?>

<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block">

	<?php if (!empty($block->subject)): ?>
  	<h3><?php print $block->subject ?></h3>
	<?php endif;?>

  <?php print $block->content ?>
  
</div>