

<div class="jumbotron jumbotron-fluid"<?php
	while (have_rows("jumbotron")): the_row();
if (get_sub_field("background_image")): ?> style="background: <?php if(get_sub_field('image_overlay')): ?>linear-gradient(45deg, <?php the_sub_field('image_overlay');?>, transparent),<?php endif;?> url('<?php the_sub_field("background_image"); ?>'); background-position: center; backgound-size: cover;"<?php endif;
		 ?>><div class="container"><?php
			if (get_sub_field("title")):
				?><h1 class="display-4"><?php the_sub_field("title"); ?></h1><?php
			endif;
			if (get_sub_field("lead")):
				?><p class="lead"><?php the_sub_field("lead"); ?></p><?php
			endif;
			if (get_sub_field("additional_text") && get_sub_field("additional_text")):
				?><hr class="my-4"><?php
			endif;
			if (get_sub_field("additional_text")):
				?><p><?php the_sub_field("additional_text") ?></p><?php
			endif;
			if (get_sub_field("link")): $link = get_sub_field("link");
				?><a class="btn btn-primary btn-lg" href="<?php echo $link['url']; ?>" role="button" target="<?php echo $link['target'] ?>"><?php echo $link['title']; ?></a><?php
			endif;
			?></div>
		</div><?php
	endwhile;
?>
