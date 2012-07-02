<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>

<div id="wrapper">

	<div id="header">
	
		<div class="container-12">
		
			<div class="grid-12">
		
			<div id="logo">	
				<?php if ($linked_logo_img): ?>
				 	<?php print $linked_logo_img; ?>
				 <?php endif; ?>
			</div>

			</div><!--/ end .grid_12 -->
			
			<div class="grid-12">

				<div id="mainnavigation">
			
					<?php if ($main_menu_links || $secondary_menu_links): ?>
			
					<?php print $main_menu_links; ?>
					<?php print $secondary_menu_links; ?>
				
					<?php endif; ?>
			
				</div><!--/ end #mainnavigation -->
			
			</div><!--/ end .grid_12 -->
		
			<div class="clearfix">&nbsp;</div>
		
		</div><!-- end/.container-12 -->

	</div><!--/ end #header -->


	<div class="container-12" id="content">

		<div class="column <?php print ns('grid-12', $page['sidebar_first'], 4); ?>">
		
			<div id="maincontent">
			
			    <?php print $messages; ?>
			    <?php print render($page['help']); ?>
		
				<?php print render($title_prefix); ?>
				<?php if ($title): ?>
					<h1 class="title" id="page-title"><?php print $title; ?></h1>
				<?php endif; ?>
				<?php print render($title_suffix); ?>      
				<?php if ($tabs): ?>
				<div class="tabs"><?php print render($tabs); ?></div>
				<?php endif; ?>

				<?php print render($page['content']); ?>
				
				<?php print render($page['lower_content']);?>
						
				 <?php print $feed_icons; ?>
				 
				
			</div><!--/ end #maincontent -->

     </div><!--/ end .grid_8 or 12 -->

    <?php if ($page['sidebar_first']): ?>
     <div class="grid-4">
     
     	<div id="secondarycontent">
	     	<?php print render($page['sidebar_first']); ?>
	   </div><!--/ end #secondarycontent -->

	</div><!--/ end .grid_4 -->
	<?php endif; ?>
		
	<div class="clearfix">&nbsp;</div>


  </div><!--/ end #content -->
  
  <div id="footer">
  	
  		<div class="container-12">	

  
      <?php if ($page['footer']): ?>
      <div id="footer-region" class="grid-12">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
    
   </div><!-- /end .container-12 -->	

    
  </div><!-- end/#footer -->

</div><!--/ end #wrapper -->

