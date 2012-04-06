<a class="advanced-search tooltipped downwards" href="<?php print url("search"); ?>" title="<?php print t('Advanced search') ?>"><img src="<?php print base_path() . path_to_theme() ?>/images/icons/advanced.png" alt="Advanced search" /></a>
<input type="text" placeholder="<?php print t('Search') ?>..." name="search_theme_form" id="edit-search-theme-form-1" />
<button type="submit" class="button" name="op" id="edit-submit-button"><?php print t('Search') ?></button>
<input type="hidden" name="form_build_id" id="<?php print drupal_get_token('form_build_id'); ?>" value="<?php print drupal_get_token('form_build_id'); ?>"  />
<input type="hidden" name="form_token" id="edit-search-theme-form-form-token" value="<?php print drupal_get_token('search_theme_form'); ?>"  />
<input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form" />
