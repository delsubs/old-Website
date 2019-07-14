<div id="comments" class="panel panel-default">

<?php if (have_comments() ) : ?>
<div class="panel-heading">
<h3 class="panel-title">
<?php comments_number('No Comments', 'One Comments', '% Comments'); ?>
<?php wp_list_comments('callback=custom_comments') ;?>
</h3>
</div>

<?php endif; ?>
</div>
<?php
$fields = array(

 'author' =>
'<p class="comment-form-author"><div class="form-group"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
( $req ? '<span class="required">*</span>' : '' ) .
'<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
 '" ' . $aria_req . ' /></div></p>',

'email' =>
'<p class="comment-form-email"><div class="form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
 ( $req ? '<span class="required">*</span>' : '' ) .
 '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .
 '" ' . $aria_req . ' /></div></p>',

 'url' =>
 '<p class="comment-form-url"><div class="form-group"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
 '<input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
 '" /></p>',
);
$comments_args = array(

// change "Leave a Reply" to "Comment"
'title_reply'=>'Discuss this post ?',
'fields' => apply_filters( 'comment_form_default_fields', $fields ),
'comment_field' => '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) .
 '</label><textarea id="comment" name="comment" class="form-control" rows="8" aria-required="true">' .
 '</textarea></div></p>',
 'comment_notes_after' => ' ');

comment_form($comments_args);
?>