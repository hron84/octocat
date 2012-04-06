<?php
$permalink = url("node/" . $node->nid, array('fragment' => "comment-" . $comment->cid));
#print_r($comment);
?>
<div class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ($comment->uid == $node->uid) ? ' author-tag' : ''; print ' '. $status ?>">
  <div class="cmeta">
    <p class="author">
      <?php if($picture): ?>
        <span class="avatar"><?php print $picture ?></span>
      <?php endif; ?>
      <strong class="author"><?php print $author; ?></strong>
      <em class="action-text"><a href="<?php print $permalink ?>">commented</a></em>
    </p>
    <p class="submitted">
      <em class="date"><a href="<?php print $permalink ?>"><?php print $ago ?></a></em>
    </p>
    <span class="icon"></span>
  </div>
  <div class="body">
    <?php print $content ?>
  </div>
  <div class="cfoot">
    <?php print $links ?>
  </div>
</div>
