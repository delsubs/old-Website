<?php
					$te = wp_get_post_terms($post->ID, 'cat');
					foreach($te as $et){
						$ne = $et->slug;
						$en = $et->name;
					}
$cate = array(

    "tv"=>"1_1",
    "movie"=>"1_2",
    "ost"=>"1_3",
    "pv"=>"1_4",
    "live-action"=>"2_1"
    );

					?>
<tr class="success">
<td style="padding:0 4px;">
<a href="/?type=<?php echo $en;?>" title="<?php echo $en;?>">
<img src="<?php echo get_template_directory_uri() ?>/static/img/icons/nyaa/<?php print_r($cate[$ne]) ;?>.png" alt="<?php echo $en;?>">
</a>
</td>
<td colspan="2">
<a href="<?php the_permalink() ?>#comments" class="comments" title="<?php echo get_comments_number(); ?>"><i class="fa fa-comments-o"></i><?php echo get_comments_number(); ?></a>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</td>
<td class="text-center">
<?php the_date(); ?>
</td>
<td class="text-center">
<?php echo getPostViews(get_the_ID()); ?>
</td>
</tr>