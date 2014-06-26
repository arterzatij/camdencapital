	<div class="footer section large-padding bg-dark-light">
		
		<div class="footer-inner section-inner">
		
			<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
			
				<div class="column column-1 left">
				
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-a' ); ?>
											
					</div>
					
				</div>
				
			<?php else : ?>
			
				<div class="column column-1 left">
				
					<div class="widgets">
				
						<div id="search" class="widget widget_search">
						
							<div class="widget-content">
							
								<h3 class="widget-title"><?php _e( 'Search form', 'hemingway' ); ?></h3>
				                <?php get_search_form(); ?>
				                
							</div>
							
		                </div>
										
					</div>
					
				</div>
				
			<?php endif; ?> <!-- /footer-a -->
				

								
		
			
			<div class="clear"></div>
		
		</div> <!-- /footer-inner -->
	
	</div> <!-- /footer -->
	
	<div class="credits section bg-dark-light no-padding">
		<div class="credits-inner section-inner">
			<div class="clear"></div>
		</div> <!-- /credits-inner -->
	</div> <!-- /credits -->

</div> <!-- /big-wrapper -->

<?php wp_footer(); ?>

</body>
</html>