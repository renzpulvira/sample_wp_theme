<?php get_header(); ?> 

<main class="mt-5">
<div class="container">
	<div class="row">
		<div class="col-md-9 main pt-3">
<?php

if(have_posts()):
	while(have_posts()):
		the_post();
		get_template_part('content', get_post_format());
endwhile; endif;


?> 
	</div>
	<div class="col-md-3"></div> 
	</div>
</div>
</main> 

<?php get_footer(); ?> 


