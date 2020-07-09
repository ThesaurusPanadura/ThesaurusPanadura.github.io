<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<?php 
		if ( has_category() ) : 
			echo '<div class="entry-meta">';
			echo '<span class="cat-links">';
    		the_category( ' ' );
    		echo '</div>';
    		echo '</span>';
	 endif; ?>

	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	</header>	
	
	<div class="entry-meta mb-4">
		<span class="author">
			<a <?php if(is_rtl()){echo 'dir="rtl"';} ?> href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php esc_html_e('By','honeypress');?> <?php echo esc_html(get_the_author());?></a>
		</span>
		<span class="posted-on">
			<a <?php if(is_rtl()){echo 'dir="rtl"';} ?> href="<?php echo esc_url( home_url('/') ); ?><?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date());?></time></a>
		</span>
		<span class="comment-links">
			<span class="comment-links"><a <?php if(is_rtl()){echo 'dir="rtl"';} ?> href="<?php the_permalink(); ?>#respond"><?php echo esc_html(get_comments_number());?></a></span>
		</span>
	</div>
	<?php if(has_post_thumbnail()):?>
		<figure class="post-thumbnail mb-4">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full',array('class'=>'img-fluid'));?>
			</a>			
		</figure>	
	<?php endif;?>	
	<div class="entry-content">
		<?php the_excerpt(); wp_link_pages( ); ?>
		<p><a href="<?php the_permalink();?>" class="more-link"><?php _e('Read more','honeypress'); ?></a></p>
	</div>										
</article>