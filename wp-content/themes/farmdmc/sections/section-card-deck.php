<div id="deckcont" class="row">
        <div class="card-deck-wrapper">
            <div class="card-deck">

				<?php while (have_rows("card_deck")): the_row();?>
                <div class="card">
					<?php if(get_sub_field("card_image")): ?>
					<img class="card-img-top" src="<?php the_sub_field("card_image");?>" alt="" />
					<?php endif; ?>
                    <div class="card-block">
						<?php if(get_sub_field("title")): ?>
						<h4 class="card-title"> <?php if(get_sub_field("font_awesome_icon")):?><i class="fa <?php the_sub_field("font_awesome_icon"); ?>" aria-hidden="true"></i> <?php endif; the_sub_field("title");?></h4>
						<?php endif;
						if(get_sub_field("text")): ?>
                        <p class="card-text">
                           <?php the_sub_field("text"); ?>
						</p>
						<?php endif;
						if(get_sub_field("link")): $link = get_sub_field("link");?>
						<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title']; ?> </a>
						<?php endif; ?>
					</div>
                </div>

				<?php endwhile;?>
            </div>

        </div>
    </div>
