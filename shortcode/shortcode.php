<?php
// Register Shortcode
function rd_team_member_shortcode($atts){
	extract( shortcode_atts( array(
		'id' => '',
	), $atts) );
	
	
	    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'rd_team_member', 'p'=>$id)
        );
		
		while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();
	
    $options = get_post_meta( $idd, '_custom_page_options', true );
	$layout_one_style = $options['layout_one_style'];
	
		$output = '
		<div class="team_content">
		<div class="section paddinf-off rd_team">
		<section class="rd_container">
        <div class="rd_raw">';
		
	if( ! empty( $options['team_option'] ) ) {

    $groups = $options['team_option'];
	foreach( $groups as $group ){
	$image = $group['imgup_1'];
	$image = wp_get_attachment_image_src( $image, 'full' );
	$custom_font = '';
		$output .= '
			<style type="text/css">
						.rd_raw {
						text-align: '.$options['team_align'].';
					}	
					.rd_team .item-circled, .rd_team .item-circled-5, .rd_raw .item-hexagon-5, .rd_raw .item-hexagon-4, .rd_raw .item-hexagon-3, .rd_raw > .item-hexagon, .rd_team .item-circled-3, .rd_team .rd_item_square-5, .rd_team .rd_item_square-4, .rd_team .rd_item_square-3, .rd_team .rd_item_square-2 {
									margin: 0px '.$options['gap_items'].'px;
								}
								
					.rd_team .rd_item_square {
									margin: 7px '.$options['gap_items'].'px;
								}
			</style>
			
		';
		require ('layout_one_style.php');

		}
			}
	endwhile;
	$output .='
	</div>
    </section>
	</div>
	</div>';
	wp_reset_query();
	return $output;
}

add_shortcode('team', 'rd_team_member_shortcode');