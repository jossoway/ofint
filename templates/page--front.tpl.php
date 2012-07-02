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
	
		<div class="grid-12">
			
			<div id="splash">
				
				<div id="introduction">
				
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
					
					<?php print $feed_icons; ?>
					
				</div><!--/ end #introduction -->
				
				<div id="globe">&nbsp;</div><!--/ end #globe -->
				
				
			</div><!--/ end #splash -->
			
			
		</div>
		
		<div class="clearfix">&nbsp;</div>
		
		<?php print render($page['lower_content']);?>
		
		<div class="clearfix">&nbsp;</div>


<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>


  </div><!--/ end .container-12 #content -->
  
  <div id="footer">
  	
  		<div class="container-12">	

  
      <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-14 clearfix">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
    
   </div><!-- /end .container-12 -->	

    
  </div><!-- end/#footer -->

</div><!--/ end #wrapper -->

