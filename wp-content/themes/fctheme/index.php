<?php
/**
 * Frontline Coaching's Wordpress theme 
 * Developed by Kristopher Windsor, only for frontlinecoaching.org
 */

get_header(); ?>

<div id="main">

	<?php
		if (is_front_page()){
			get_template_part('homepage');
		} else if (have_posts()){
			?><div class="page-content"><?
			if (have_posts()){
				the_post();
				the_content();
				if (the_title(null, null, false) == "Coaching"){
					get_template_part('launch-application');
				}
				if (the_title(null, null, false) == "Resources"){
					get_template_part('resources');
				}
			}
			?></div><?
		} else { ?>
			<div class="page-content">
				<div class="page-header graydient">
					<h1>Error</h1>
					<h2>Nothing is here!</h2>
				</div>
			</div><?
		}
	?>

</div>
<div id="fullscreenpopup"></div>

<?php
get_footer();