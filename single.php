<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
<div class="panel panel-success">
<div class="panel-heading">
<h3 class="panel-title">
<?php the_title(); ?>
</h3>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-1">Category:</div>
<div class="col-md-5">
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
echo $en;
?>

</div>
<div class="col-md-1">Date:</div>
<div class="col-md-5" ><?php the_date(); ?></div>
</div>
<div class="row">
<div class="col-md-1">Submitter:</div>
<div class="col-md-5">
<a class="text-default" href="/user/<?php echo get_the_author_link(); ?>"><?php the_author();?></a> </div>
<div class="col-md-1">Coment:</div>
<div class="col-md-5"><span style="color: green;"><?php echo get_comments_number(); ?></span></div>
</div>
<div class="row">
<div class="col-md-1">View:</div>
<div class="col-md-5"><?php echo getPostViews(get_the_ID()); ?></div>
</div>
<div class="row">
<div class="col-md-offset-6 col-md-1">Link site:</div>
<div class="col-md-5"><kbd><?php the_permalink() ?></kbd></div>
</div>
</div> 
<div class="panel-footer clearfix">
<?php
if(!empty(rwmb_meta('url-download-480')[0])){
?>
<span><i class="fa fa-download fa-fw"></i><b>480p</b> : <?php delsubs_doyok_get_download('480'); ?></span>
<?php
}
?>
<?php
if(!empty(rwmb_meta('url-download-480')[0])){
?>
<span><i class="fa fa-download fa-fw"></i><b>720p</b> : <?php delsubs_doyok_get_download('720'); ?></span>
<?php
}
?>
<?php
if(!empty(rwmb_meta('url-download-1080')[0])){
?>
<span><i class="fa fa-download fa-fw"></i><b>1080p</b> : <?php delsubs_doyok_get_download('1080'); ?></span>
<?php
}
?>
<button type="button" class="btn btn-xs btn-danger pull-right" data-toggle="modal" data-target="#reportModal">
Report
</button>
</div>
</div> 
<div class="panel panel-default">
<div class="panel-body" id="torrent-description"><?php the_content(); ?></div>
</div>
<?php endwhile; endif; ?>


<div id="comments" class="panel panel-default">

<?php if (have_comments() ) : ?>
<div class="panel-heading">
<h3 class="panel-title">
<?php comments_number('No Comments', 'One Comments', '% Comments'); ?>
<?php wp_list_comments('callback=nyaa_comments') ;?>
</h3>
</div>
<div class="panel panel-default comment-panel" id="com-1">
<div class="panel-body">
<div class="col-md-2">
<p>
<a class="text-default" href="/user/doyok">doyok</a>
(uploader)
</p>
<p><img class="avatar" src="https://i2.wp.com/nyaa.si/static/img/avatar/default.png?ssl=1" alt="User"></p>
</div>
<div class="col-md-10">
<div class="row">
<a href="#com-1"><small data-timestamp-swap data-timestamp="1497028928">2017-06-09 17:22 UTC</small></a>
<form class="delete-comment-form" action="/view/929582/comment/2009/delete" method="POST">
<button name="submit" type="submit" class="btn btn-danger btn-xs" title="Delete">Delete</button>
</form>
</div>
<div class="row">
<div markdown-text class="comment-content" id="torrent-comment2009">ty for uploading</div>
</div>
</div>
</div>
</div>
<?php endif; ?>

<?php comments_template(); ?>

</div>
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Report torrent #929582</h4>
</div>
<div class="modal-body">
<form method="POST" action="https://nyaa.si/view/929582/submit_report">
<input id="csrf_token" name="csrf_token" type="hidden" value="IjM5ZjFhMTU0NDQ1NGQ1YTViODRjNTc1N2M2YWE4MDExMjkwMGM2ZGUi.DBxqwQ.WLydgNmr08ijkeyLvZxRrPY65GM">
<div class="form-group">
<label class="control-label" for="reason">Report reason</label>
<textarea class="form-control" id="reason" maxlength="255" name="reason" title=""></textarea>
</div>
<div style="float: right;">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-danger">Report</button>
</div>
</form>
</div>
<div class="modal-footer" style="border-top: none;">
</div>
</div>
</div>
</div>
<script type="text/javascript">
	// Focus the report text field once the modal is opened.
	$('#reportModal').on('shown.bs.modal', function () {
		$('#reason').focus();
	});
</script>
</div> 
<?php get_footer(); ?>
