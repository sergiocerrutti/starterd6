<?php
/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	Objeto:
 *	- $node: Objeto que contiene toda la información del node y relacionada con el mismo.
 *
 *	Variables que podemos utilizar:
 *	- $title: Título del node.
 *	- $content: Contenido del node, si la variable $teaser devuelve true, se devolverá un resumen del contenido.
 *	- $picture: El avatar del autor del node.
 *	- $date: Hora y fecha de creación.
 *	- $links: Enlaces de funcionalidades del node, como "leer más" o "añadir comentario".
 *	- $name: Nombre del autor del node, viene enlazado si el usuario visitante tiene permisos para ver perfiles.
 *	- $node_url: URL directa al node.
 *	- $terms: Listado de taxonomías del node, vienen enlazadas.
 *	- $submitted: Autor y fecha de creación del node.
 *
 *	Variables extra:
 *	- $type: Tipo de contenido del node.
 *	- $comment_count: Número de comentarios que tiene el node.
 *	- $uid: Número de identificación del autor del node.
 *	- $created: Fecha de creación del node sin formatear (Unix timestamp).
 *	- $zebra: Si la variable $teaser devuelve true, ésta devolverá 'odd' e 'even' para diferenciar cada node en un listado de nodes.
 *	- $id: Posición del node. Incrementa cada vez que es pintado.
 *
 *	Variables de estado del node:
 *	- $teaser: Devuelve el valor 'true' si es un listado de nodes.
 *	- $page: Devuelve el valor 'true' si solo está cargando este node.
 *	- $promote: Devuelve el valor 'true' si el node tiene activado que salga en la home.
 *	- $sticky: Devuelve el valor 'true' si el node está "pegajoso en las cimas". xD
 *	- $status: Devuelve el valor 'true' si el node está como publicado.
 *	- $comment: Tipo de configuración de los comentarios para el node.
 *	- $readmore: Devuelve el valor 'true' si el teaser no consigue mostrar todo el contenido.
 *	- $is_front: Devuelve el valor 'true' si el node se encuentra en la home.
 *	- $logged_in: Devuelve el valor 'true' si el usuario está logado.
 *	- $is_admin: Devuelve el valor 'true' si el usuario es el Admin.
 *	
 *	Más info:
 *	http://api.drupal.org/api/drupal/modules--node--node.tpl.php/6
 */
?>

<div id="node-<?php print $node->nid; ?>" class="node <?php print $node->type; ?><?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' unpublished'; } ?>">
	
	<?php if ($page == 0): ?>
	  <h2><a title="<?php print $title ?>" href="<?php print $node_url ?>"><?php print $title ?></a></h2>
	<?php endif; ?>

  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted; ?></span>
  <?php endif; ?>

  <div class="content">
    <?php print $content ?>
  </div>

  <?php if ($taxonomy): ?>
    <div class="terms"><?php print $terms ?></div>
  <?php endif;?>

  <?php if ($links): ?>
    <div class="links"><?php print $links; ?></div>
  <?php endif; ?>

</div>