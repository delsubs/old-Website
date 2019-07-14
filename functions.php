<?php 
require get_template_directory() . '/inc/admins-setting.php' ;
require get_template_directory() . '/inc/cptnime.php' ;

function custom_comments ($comment, $args, $depth) {

    $GLOBALS['comments'] = $comment; ?>
    <div class="panel panel-default comment-panel" id="com-<?php comment_ID() ?>">
<div class="panel-body">
<div class="col-md-2">
<p>
<a class="text-default"><?php comment_author(); ?></a>
(uploader)
</p>
<p><?php echo get_avatar( 'email@example.com', 32 ); ?></p>
</div>
<div class="col-md-10">
<div class="row">
<a href="#com-1"><small><?php comment_date('n-j-Y'); ?></small></a>
<form class="delete-comment-form" action="/view/929582/comment/2009/delete" method="POST">
<button class="btn btn-danger btn-xs" ><?php edit_comment_link(__('edit comment'), '', ''); ?></button>
</form>
</div>
<div class="row">
<div class="comment-content" id="torrent-<?php comment_ID() ?>"><?php comment_text() ?></div>
</div>
</div>
</div>
</div>
<?php
}

/*===========================
		TAXONOMY
=============================*/
add_action('init', 'cptui_register_my_taxes_idnam');
function cptui_register_my_taxes_idnam() {
register_taxonomy( 'cat',array (
  0 => 'post',
),
array( 'hierarchical' => true,
  'label' => 'Category',
  'show_ui' => true,
  'query_var' => true,
  'show_admin_column' => false,
  'labels' => array (
  'search_items' => 'category',
  'popular_items' => 'Popular Category',
  'all_items' => 'All Category',
  'parent_item' => 'Parent Category',
  'parent_item_colon' => 'Parent Category:',
  'edit_item' => 'Edit Category',
  'update_item' => 'Update Category',
  'add_new_item' => 'Add New Category',
  'new_item_name' => 'New Category ',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
}

/*===========================
	 END TAXONOMY
=============================*/

/*===========================
		METABOX
=============================*/
add_filter('rwmb_meta_boxes', 'your_prefix_meta_boxes');
function your_prefix_meta_boxes($meta_boxes){
	$meta_boxes[] = array(
		'title'	=> __('Download 480p', 'textdomain'),
		'post_types' => 'post',
		'fields' => array(
			array(
				'id' => 'url-download-480',
				'name' => __('URL Download', 'textdomain'),
				'type' => 'text',
				'clone' => true,
				'max_clone' => '5',
			),
			array(
				'id' => 'server-download-480',
				'name' => __( 'Server Download', 'textdomain' ),
				'type' => 'text',
				'clone' => true,
				'max_clone' => '5',
			),
		),
	);
	$meta_boxes[] = array(
		'title'	=> __('Download 720p', 'textdomain'),
		'post_types' => 'post',
		'fields' => array(
			array(
				'id' => 'url-download-720',
				'name' => __('URL Download', 'textdomain'),
				'type' => 'text',
				'clone' => true,
				'max_clone' => '5',
			),
			array(
				'id' => 'server-download-720',
				'name' => __( 'Server Download', 'textdomain' ),
				'type' => 'text',
				'clone' => true,
				'max_clone' => '5',
			),
		),
	);
	$meta_boxes[] = array(
		'title'	=> __('Download 1080p', 'textdomain'),
		'post_types' => 'post',
		'fields' => array(
			array(
				'id' => 'url-download-1080',
				'name' => __('URL Download', 'textdomain'),
				'type' => 'text',
				'clone' => true,
				'max_clone' => '5',
			),
			array(
				'id' => 'server-download-1080',
				'name' => __( 'Server Download', 'textdomain' ),
				'type' => 'text',
				'clone' => true,
				'max_clone' => '5',
			),
		),
	);
	return $meta_boxes;
}
/*===========================
	 END METABOX
=============================*/

function delsubs_doyok_get_download($quality){
	if($quality == '480'){
		$URL480 = rwmb_meta('url-download-480');
		$SRV480 = rwmb_meta('server-download-480');
		$content480 = '';
		if(!empty($URL480[0])){
			$content480 .= '<a href="'.$URL480[0].'" rel="nofollow" title="'.$SRV480[0].'">'.$SRV480[0].'</a>';
		}else{
			$content1080 .= '<a>Tidak tersedia</a>';
		}
		if(!empty($URL480[1])){
			$content480 .= '<a href="'.$URL480[1].'" rel="nofollow" title="'.$SRV480[1].'">'.$SRV480[1].'</a>';
		}
		if(!empty($URL480[2])){
			$content480 .= '<a href="'.$URL480[2].'" rel="nofollow" title="'.$SRV480[2].'">'.$SRV480[2].'</a>';
		}
		if(!empty($URL480[3])){
			$content480 .= '<a href="'.$URL480[3].'" rel="nofollow" title="'.$SRV480[3].'">'.$SRV480[3].'</a>';
		}
		if(!empty($URL480[4])){
			$content480 .= '<a href="'.$URL480[4].'" rel="nofollow" title="'.$SRV480[4].'">'.$SRV480[4].'</a>';
		}
		echo $content480;
	}
	if($quality == '720'){
		$URL720 = rwmb_meta('url-download-720');
		$SRV720 = rwmb_meta('server-download-720');
		$content720 = '';
		if(!empty($URL720[0])){
			$content720 .= '<a href="'.$URL720[0].'" rel="nofollow" title="'.$SRV720[0].'">'.$SRV720[0].'</a>';
		}else{
			$content1080 .= '<a>Tidak tersedia</a>';
		}
		if(!empty($URL720[1])){
			$content720 .= '<a href="'.$URL720[1].'" rel="nofollow" title="'.$SRV720[1].'">'.$SRV720[1].'</a>';
		}
		if(!empty($URL720[2])){
			$content720 .= '<a href="'.$URL720[2].'" rel="nofollow" title="'.$SRV720[2].'">'.$SRV720[2].'</a>';
		}
		if(!empty($URL720[3])){
			$content720 .= '<a href="'.$URL720[3].'" rel="nofollow" title="'.$SRV720[3].'">'.$SRV720[3].'</a>';
		}
		if(!empty($URL720[4])){
			$content720 .= '<a href="'.$URL720[4].'" rel="nofollow" title="'.$SRV720[4].'">'.$SRV720[4].'</a>';
		}
		echo $content720;
	}
	if($quality == '1080'){
		$URL1080 = rwmb_meta('url-download-1080');
		$SRV1080 = rwmb_meta('server-download-1080');
		$content1080 = '';
		if(!empty($URL1080[0])){
			$content1080 .= '<a href="'.$URL1080[0].'" rel="nofollow" title="'.$SRV1080[0].'">'.$SRV1080[0].'</a>';
		}else{
			$content1080 .= '<a>Tidak tersedia</a>';
		}
		if(!empty($URL720[1])){
			$content1080 .= '<a href="'.$URL1080[1].'" rel="nofollow" title="'.$SRV1080[1].'">'.$SRV1080[1].'</a>';
		}
		if(!empty($URL720[2])){
			$content1080 .= '<a href="'.$URL1080[2].'" rel="nofollow" title="'.$SRV1080[2].'">'.$SRV1080[2].'</a>';
		}
		if(!empty($URL720[3])){
			$content1080 .= '<a href="'.$URL1080[3].'" rel="nofollow" title="'.$SRV1080[3].'">'.$SRV1080[3].'</a>';
		}
		if(!empty($URL720[4])){
			$content1080 .= '<a href="'.$URL1080[4].'" rel="nofollow" title="'.$SRV1080[4].'">'.$SRV1080[4].'</a>';
		}
		echo $content1080;
	}
}

function getCrunchifyPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.' ';
}
 
function setCrunchifyPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function wpb_alter_comment_form_fields($fields) {

// Modify Name Field and show that it's Optional 
$fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Name (Optional)' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';

// Modify Email Field and show that it's Optional
$fields['email'] = '<p class="comment-form-email"><label for="email">' . __( 'Email (Optional)', 'twentythirteen' ) . '</label> ' .
      ( $req ? '<span class="required">*</span>' : '' ) .
      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' /></p>'; 

// This line removes the website URL from comment form. 	  
	  $fields['url'] = '';

    return $fields;
}
add_filter('comment_form_default_fields', 'wpb_alter_comment_form_fields');


function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
function getPostComments($postID){
    $query_post = get_post($postID);
    $num = $query_post->comment_count;
        if( $num == 0 || $num > 1 ) : $num;
        else : $num; 
        endif;
    $permalink = get_permalink($postID);
 
    return '<a href="'. $permalink . '#comments" class="comments-count">' . $num . '</a>';
}