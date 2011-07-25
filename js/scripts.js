/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	En Drupal no debemos utilizar más la típica comprobación de jQuery de si el documento está cargado:
 *	
 *	1		$(document).ready(function() {
 *	2		  // Nuestro codiguillo
 *	3		});
 *	
 *	Drupal tiene su propia manera de registrar funciones y además las aplica en cualquier momento, ya se acabe de cargar el DOM o incluso haya cambiado posteriormente (como la función live() de jQuery 1.4).
 *	En Drupal se les llama behaviors (comportamientos), y lo utilizamos de una manera muy parecida al document ready de arriba:
 *	
 *	1		Drupal.behaviors.bollito = function () {
 *	2			$('#bollito a').click(function() {
 *	3			  $(this).width(400);
 *	4				return false;
 *	5			});
 *	6		}
 *		
 *	Mejor explicado por Pedro Cambra en:
 *	http://cambrico.net/drupal/drupal-y-jquery-principios-basicos
 */

