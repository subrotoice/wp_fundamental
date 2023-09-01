<?php
function post_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '',
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'posttype', 'orderby' => 'menu_order','order' => 'ASC')
        );      
         
    $list = '<div class="custom-post-list">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $list .= '
        <div class="single-post-item">
            <h2>' .do_shortcode( get_the_title() ). '</h2>
            '.wpautop( $post_content ).'
            <p>'.$custom_field.'</p>
        </div>
        ';        
    endwhile;
    $list.= '</div>';
    wp_reset_query();
    return $list;
}
add_shortcode('post_list', 'post_list_shortcode');  


function shortcode_with_attributes( $atts, $content = null  ) {
 
    extract( shortcode_atts( array(
        'attribute' => '',
        'another' => ''
    ), $atts ) );
 
    return '
        <div class="shortcode-wrapper">
            <h2>'.$attribute.'</h2>
            '.$another.'
        </div>
    ';
}   
add_shortcode('shortcode_name', 'shortcode_with_attributes');

/* Get all sticky posts */
function wpb_latest_sticky() { 
/* Get all sticky posts */
$sticky = get_option( 'sticky_posts' );
/* Sort the stickies with the newest ones at the top */
rsort( $sticky );
/* Get the 5 newest stickies (change 5 for a different number) */
$sticky = array_slice( $sticky, 0, 1 );
/* Query sticky posts */
$args = array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1 );
$the_query = get_posts( $args );
foreach( $the_query as $post ) : setup_postdata($post);
		echo '<div class="stricky_single">';
		the_post_thumbnail('full');
		echo '<a href="'.get_the_permalink().'"><h2>'.get_the_title().'</h2></a>';
		echo '<a href="'.get_the_author_link().'"><p><span>Édition du'.get_the_time('dS M Y').'</span> | '.get_the_author().'</p></a>';
		echo '<p>'. get_the_excerpt() .'</p></div>';
  endforeach;
wp_reset_postdata();
} 
add_shortcode('latest_stickies', 'wpb_latest_sticky');

/* Most Recent Post */
function my_recent_post()
 {
global $post;
$args = array( 'posts_per_page' => 1, 'post_type'=> 'post', 'post__not_in' => get_option( 'sticky_posts' ) );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post);
		echo '<div class="stricky_single">';
		the_post_thumbnail('full');
		echo '<a href="'.get_the_permalink().'"><h2>'.get_the_title().'</h2></a>';
		echo '<a href="'.get_the_author_link().'"><p><span>Édition du'.get_the_time('dS M Y').'</span> | '.get_the_author().'</p></a>';
		echo '<p>'. get_the_excerpt() .'</p></div>';
  endforeach;
  wp_reset_postdata();
 }
 add_shortcode( 'most_recent', 'my_recent_post' );
 
/* Recent but start form second post */
function sechond_post_start()
 {
global $post;
$args = array( 'posts_per_page' => 3, 'post_type'=> 'post', 'post__not_in' => get_option( 'sticky_posts' ),'offset' => '1' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post);
		echo '<div class="side-article articles">';
		echo '<a href="'.get_the_permalink().'"><h2>'.get_the_title().'</h2></a>';
		echo '<a href="'.get_the_author_link().'"><p><span>Édition du'.get_the_time('dS M Y').'</span> | '.get_the_author().'</p></a>';
		echo '<p>'. the_excerpt () .'</p></div>';
  endforeach;
  wp_reset_postdata();
 }
 add_shortcode( 'sechond_post_start', 'sechond_post_start' );
/* Recent Four but start form 5th */
function four_post_start()
 {
global $post;
$args = array( 'posts_per_page' => 4, 'post_type'=> 'post', 'post__not_in' => get_option( 'sticky_posts' ),'offset' => '4' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post);
		echo '<div class="col-md-6"><div class="recents_articles articles">';
		echo '<a href="'.get_the_permalink().'"><h2>'.get_the_title().'</h2></a>';
		the_post_thumbnail('thumbnail');
		echo '<p>'. excerpt('25') .'</p>';
		echo '<a href="'.get_the_author_link().'"><p><span>Édition du'.get_the_time('dS M Y').'</span> | '.get_the_author().'</p></a></div></div>';
  endforeach;
  wp_reset_postdata();
 }
 add_shortcode( 'four_post_start', 'four_post_start' );
