<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  
  <head>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <title><?php print $head_title ?></title>
  </head>
  
  <body class="language-<?php print $language->language; ?><?php if ($node) { print ' nodetype-'.$node->type; }; ?>">
  
		<div id="wrapper">
			
			<div id="header">
							
				<?php if ($header): ?>
					<?php print $header; ?>
				<?php endif; ?>
				
			</div> <!-- //#header -->