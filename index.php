<?php get_header(); ?>
<div class="container">
<div class="alert alert-info">
<p>DOYOK is Here</p>
</div>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped torrent-list">
<thead>
<tr>
<th class="hdr-category text-center" style="width:80px;">Category</th>
<th class="hdr-name" style="width:auto;">Name</th>
<th class="hdr-comments sorting text-center" title="Comments" style="width:50px;"><a href="/?s=comments&amp;o=desc"></a><i class="fa fa-comments-o"></i></th>
<th class="hdr-date sorting_desc text-center" title="In UTC" style="width:140px;">
<a href="/?s=id&amp;o=asc"></a>
Date
</th>
<th class="hdr-downloads sorting text-center" title="viewer" style="width:50px;">
<a href="/?s=downloads&amp;o=desc"></a>
<i class="fa fa-eye" aria-hidden="true"></i>
</th>
</tr>
</thead>
<tbody>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('articles'); ?>
<?php endwhile; endif; ?>

</tbody>
</table>
</div>

<div class="center">
<nav>
<ul class="pagination">
<?php
$returnx = paginate_links( array(
'prev_text' => __('<i class="fa fa-caret-left"></i>'),
'next_text' => __('<i class="fa fa-caret-right"></i>'),
'end_size' => '4',
'mid_size' => '5',
'type' => 'list',
) );
echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $returnx );
?>
</ul>
</nav>
</div>

</div>
<?php get_footer(); ?>
