<?php 
/**
 * Helper functions.
 *
 * @package Honeypress
 */
if (!function_exists('honeypress_custom_navigation')) :

    function honeypress_custom_navigation() {
        if (!is_rtl()) {
            the_posts_pagination(array(
                'mid_size' => 5,
                'prev_text' => __('<i class="fa fa-angle-double-left"></i>', 'honeypress'),
                'next_text' => __('<i class="fa fa-angle-double-right"></i>', 'honeypress'),
            ));
        } else {
            the_posts_pagination(array(
                'mid_size' => 5,
                'prev_text' => __('<i class="fa fa-angle-double-right"></i>', 'honeypress'),
                'next_text' => __('<i class="fa fa-angle-double-left"></i>', 'honeypress'),
            ));
        }
    }

endif;
add_action( 'honeypress_post_navigation', 'honeypress_custom_navigation' );


function honeypress_comment($comment, $args, $depth) {
  $tag       = 'div';
  $add_below = 'comment';
  ?>
  <div class="media comment-box">
    <span class="pull-left-comment">
          <?php echo get_avatar( $comment,100, null,'comments user', array( 'class' => array( 'img-fluid comment-img') )); ?>
    </span>
    <div class="media-body">
      <div class="comment-detail">
        <h5 class="comment-detail-title"><?php esc_html(comment_author()); ?><time class="comment-date"><?php printf( esc_html__('%1$s  %2$s','honeypress'), esc_html(get_comment_date()),  esc_html(get_comment_time()) ); ?></time></h5>
            <?php comment_text(); ?>      
        <div class="reply">
          <?php comment_reply_link (array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
      </div>       
    </div>      
  </div>
  <?php
}

/**
* Displays the author name
*/
function honeypress_get_author_name( $post ){
  $user_id = $post->post_author;
  if( empty( $user_id ) ){
    return;
  }
  $user_info = get_userdata( $user_id );
  echo esc_html( $user_info->display_name );
}

function honeypress_footer_section_hook()
{
?>
<footer class="site-footer">  
  <div class="container">
    <?php 
    if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3')): ?>
    <div class="seprator-line"></div>   
      <?php get_template_part('sidebar','footer');
    endif;?>  
  </div>
  <?php if(get_theme_mod('footer_enable',true)==true):?>
  <div class="site-info text-center">
     <?php $honeypress_footer_copyright = get_theme_mod('footer_copyright','<p>'. __( 'Proudly powered by <a href="https://wordpress.org"> WordPress</a> | Theme: <a href="https://spicethemes.com" rel="nofollow">HoneyPress</a> by SpiceThemes', 'honeypress' ).'</p>'); ?>  
     <?php echo wp_kses_post($honeypress_footer_copyright);?> 
  </div>
<?php endif;?>
</footer>
<?php  
}
add_action('honeypress_footer_section_hook','honeypress_footer_section_hook');