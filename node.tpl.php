
            <div class="node">
              <div class="meta">
              <h2 class="nodetitle"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
                <!--span class="author vcard fn" ><a href="#">hron84</a></span> <span class="published">Januar 1, 2012</span-->
                <?php if ($submitted): ?>
                  <span class="author vcard fn"><?php print $submitted ?></span>
                <?php endif; ?>
                <?php if($comment_count > 0): ?>
                  <div class="respond"><?php print format_plural($comment_count, '1 comment', '@count comments'); ?></div>
                <?php endif; ?>
              </div>
              <?php print $content ?>
              <div class="nodefoot">
                <?php if($terms): ?>
                <div class="terms"><strong><?php print t('Tags') ?>:</strong> <?php print $terms ?></div>
                <?php endif; ?>
                <?php print $links; ?>
              </div>
            </div>
