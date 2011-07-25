<?php
/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	Variables que podemos utilizar:
 *	- $search_results: Contiene todos los resultados paginados, cada resultado se pinta utilizando "search-result.tpl.php".
 *	- $pager: Si hay más resultados de los configurados por página en Drupal, esta variable pinta un paginador.
 *	- $type: Tipo de búsqueda (node, user, etc.). Como solemos utilizar el tipo ApacheSolr, esta variable no nos interesa.
 *
 *	Más info:
 *	http://api.drupal.org/api/drupal/modules--search--search-results.tpl.php/6
 */
?>

<ul id="search-results">
  <?php print $search_results; ?>
</ul>
<?php print $pager; ?>