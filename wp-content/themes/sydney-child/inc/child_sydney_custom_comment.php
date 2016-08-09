<?php

function child_sydney_custom_comment(){ ?>

<div class="child-comment-individual">

<?php  comment_text(); ?>

<span>Comment by: <?php comment_author(); ?></span>

<?php }


?>