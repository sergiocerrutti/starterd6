<?php
/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	Variables que podemos utilizar:
 *	- $url: URL del resultado.
 *	- $title: Título del resultado.
 *	- $snippet: Teaser del resultado.
 *	- $info: Información del resultado como es su autor, fecha de publicación, taxonomías, etc.
 *	- $type: Tipo de búsqueda (node, user, etc.). Como solemos utilizar el tipo ApacheSolr, esta variable no nos interesa.
 *
 *	Objeto extra:
 *	- $info_split: Array con toda la información de $info separada por partes para pintarlo a nuestro gusto.
 *	
 *	Más info:
 *	http://api.drupal.org/api/drupal/modules--search--search-result.tpl.php/6
 */
?>

<li>
	<h2>
	  <a href="<?php print $url; ?>"><?php print $title; ?></a>
	</h2>
	<?php if ($snippet) : ?>
	  <p class="search-snippet"><?php print $snippet; ?></p>
	<?php endif; ?>
	<?php if ($info) : ?>
	<p class="search-info"><?php print $info; ?></p>
	<?php endif; ?>
</li>