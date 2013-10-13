<ul class="commentlist clearfix"><?php wp_list_comments('avatar_size=90&callback=ahox_comments'); ?></ul>
<div class="pagination-comment clearfix"><?php paginate_comments_links(); ?> </div>
<?php comment_form(array('title_reply'=>'Leave a Comment', 'comment_notes_before'=>'', 'comment_notes_after'=>'')); ?> 

