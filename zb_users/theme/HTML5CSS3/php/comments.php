<label id="AjaxCommentBegin"></label><?php if ($socialcomment) { ?>
<?php  echo $socialcomment;  ?>
<?php }else{  ?>
<!--评论输出-->
<?php  foreach ( $comments as $key => $comment) { ?> 
<?php  include $this->GetTemplate('comment');  ?>
<?php  }   ?>

<!--评论翻页条输出-->
<div class="pagebar commentpagebar">
<?php if ($pagebar) { ?>
<?php  include $this->GetTemplate('pagebar');  ?>
<?php } ?>
</div>

<!--评论框-->
<?php  include $this->GetTemplate('commentpost');  ?>

<?php } ?><label id="AjaxCommentEnd"></label>