<?php
/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	Variables que podemos utilizar:
 *	- $author: Autor del comentario (puede ser texto plano o enlace dependiendo de si el usuario visitante puede ver perfiles o no).
 *	- $content: Comentario.
 *	- $date: Hora y fecha en que se publicó.
 *	- $links: Enlaces de gestión del comentario (modificar, eliminar, etc.)
 *	- $new: Devuelve el valor 'true' si el comentario no ha sido "leído" por el usuario.
 *	- $picture: Avatar del autor (si están activados los avatares).
 *	- $signature: Firma del autor (si están activadas las firmas).
 *	- $status: Estado del comentario: "comment-unpublished", "comment-published" o "comment-preview".
 *	- $submitted: Debe ser parecido al $date, pero tal vez incluya al autor del comentario o algo así.
 *	- $title: Título del comentario enlazado (internamente con anchor).
 *
 *	Objetos extra:
 *	- $comment: Acceso a toda la información del comentario, esto nos viene bien si, por ejemplo, queremos sacar el autor sin estar enlazado, de la siguiente forma: "$comment->registered_name".
 *	- $node: Tenemos acceso a toda la información del nodo del que estamos viendo el comentario. En principio no nos sirve de mucho pero quién sabe...
 *	
 *	Más info:
 *	http://api.drupal.org/api/drupal/modules--comment--comment.tpl.php/6
 */
?>

<li class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; ?>">

  <div class="comment-info">
    <?php print $picture; ?>
    <span class="comment-author"><?php print $author; ?></span>
    <span class="comment-date"><?php print $date; ?></span>
  </div>

  <div class="comment-content">
    <?php print $content; ?>
    <?php print $links; ?>
  </div>
  
</li>