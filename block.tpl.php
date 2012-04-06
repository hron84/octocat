<div class="block block-<?php print $block->module ?>" id="block-<?php print $block->module . '-' . $block->delta ?>">
  <?php if ($block->subject): ?>
    <h4><?php print $block->subject ?>
  <?php endif; ?>
  <?php print $block->content ?>
</div>
