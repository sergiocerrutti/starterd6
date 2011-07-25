<?php
/**
 *	ideup! - Drupal 6 Starter theme
 *
 *	Objeto:
 *	- $node: Objeto que contiene toda la información del node y relacionada con el mismo.
 *
 *	Variables que podemos utilizar:
 *	- $base_path: La ruta relativa a la instalación del Drupal, por defecto será "/".
 *	- $directory: La ruta relativa a este theme (p.ej.: "themes/starter6").
 *	- $is_front: Devuelve el valor 'true' si estamos en la home.
 *	- $logged_in: Devuelve el valor 'true' si el usuario está logado.
 *	- $is_admin: Devuelve el valor 'true' si el usuario es el Admin.
 *	- $front_page: The URL of the front page. Use this instead of $base_path, when linking to the front page. This includes the language domain or prefix. 
 *
 *	Objetos extra:
 *	- $node: Tenemos acceso a toda la información del nodo si tenemos uno cargado. En principio no nos sirve de mucho pero quién sabe...
 *	- $language: Objeto con el idioma escogido. "$language->language" mostraría las iniciales del idioma. "$language->dir" muestra la dirección de escritura ("ltr" o "rtl").
 *	
 *	Más info:
 *	http://api.drupal.org/api/drupal/modules--system--page.tpl.php/6
 */
?>

<?php include ("includes/header.inc"); ?>
			
			<div id="container" class="layout-default">
	
				<?php include ("includes/top.inc"); ?>
						    
		    <?php if ($title): ?>
		      <h1><?php print $title; ?></h1>
		    <?php endif; ?>
				
			  <?php if ($sidebar_first): ?>
			    <div id="sidebar-first">
			      <?php print $sidebar_first; ?>
			    </div> <!-- //#sidebar-first -->
			  <?php endif; ?>
			  
			  <?php if ($sidebar_second): ?>
			    <div id="sidebar-second">
			      <?php print $sidebar_second; ?>
			    </div> <!-- //#sidebar-second -->
			  <?php endif; ?>
			  
			  <?php if ($content): ?>
			    <div id="content">
			      <?php print $content; ?>
			    </div> <!-- //#content -->
			  <?php endif; ?>
			
				<?php if ($footer): ?>
					<?php print $footer; ?>
				<?php endif; ?>
				
				<?php if ($footer_message): ?>
					<?php print $footer_message; ?>
				<?php endif; ?>
		
			</div> <!-- //#container -->

<?php include ("includes/footer.inc"); ?>