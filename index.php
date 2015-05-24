
	<body>
		<div class="container-fluid">

			<?php get_header(); ?>
	
			<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();
					the_content();
				}
			}else{
				_e('tidak ada postingan!');
				get_template_part( 'home-content' );
			}					
			?>
				
			<?php wp_footer(); ?>
		</div>
	</body>
</html>
