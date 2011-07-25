<?php
/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	Este archivo nos sirve para reescribir funciones antes de ser usadas, por lo que podemos cambiar prácticamente cualquier cosa.
 *	Arriba se abre "<?php" pero nunca se llega a cerrar, solo en este archivo.
 *	
 *	Para modificar el markup de la página de login y el bloque de login:
 *	http://drupal.org/node/19855
 *	
 *	Para reescribir la forma de pintar las migas
 *	http://drupal.org/node/64067
 *
 *	Tenéis muchos más snippets aquí:
 *	http://drupal.org/node/45471
 *	
 *	Os dejo un snippet que elimina el div que se genera dentro de todos los forms y que de poco nos sirve excepto para guarrear.
 */

/**
 * Format a form.
 *
 * @param $element
 *   An associative array containing the properties of the element.
 *   Properties used: action, method, attributes, children
 * @return
 *   A themed HTML string representing the form.
 *
 * @ingroup themeable
 */
function phptemplate_form($element) {
  // Anonymous div to satisfy XHTML compliance.
  $action = $element['#action'] ? 'action="'. check_url($element['#action']) .'" ' : '';
  return '<form '. $action .' accept-charset="UTF-8" method="'. $element['#method'] .'" id="'. $element['#id'] .'"'. drupal_attributes($element['#attributes']) .">". $element['#children'] ."</form>\n";
}