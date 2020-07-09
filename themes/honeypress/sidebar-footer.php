<?php
/**
 * Footer Widget Area
 *
 * @package Honeypress
 */
?>
<div class="row footer-sidebar">
	<?php
		for($i=1; $i<=3; $i++)
		{
			echo '<div class="col-lg-4 col-md-6 col-sm-12">';
			dynamic_sidebar('footer-sidebar-'.$i);
			echo '</div>';
		}
	?>
</div>