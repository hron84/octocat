<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <?php print $styles ?>
    <?php if(!empty($logo)): ?>
    <style type="text/css">
    .site-logo {
      background-image: url(<?php print $logo ?>);
    }
    </style>
    <?php endif; ?>
    <?php print $scripts ?>
    <title><?php print $head_title ?></title>
  </head>

  <body <?php print drupal_attributes($attr) ?>>
    <div id="header" class="true clearfix">
      <div class="container">
        <a class="site-logo" href="<?php print $front_page ?>" title="logo">&nbsp;</a>
        <div class="topsearch">
          <?php if(!empty($search_box)) print $search_box; ?>
          <?php print theme('links', menu_secondary_links(), array('class' => 'top-nav')); ?>
        </div>
        <div id="userbox">
          <?php if(user_is_logged_in()): ?>
          <div id="user">
            <?php if(!empty($user_picture)): ?>
            <a href="<?php print url("user/".$user->uid); ?>">
              <?php print $user_picture; ?>
            </a>
              <?php # <img src="<?php print $picture >" width="20" height="20" alt="avatar" /> ?>
            <?php endif; ?>
            <?php print l($user->name, "user/".$user->uid, array('attributes' => array('class' => 'name'))); ?>
          </div>
          <ul id="user-links">
            <li>
              <a id="notifications" class="tooltipped downwards" title="<?php print t('My recent posts'); ?>" href="<?php print url("user/".$user->uid."/tracker") ?>">
                <span class="icon"><?php print t('My recent posts'); ?></span>
              </a>
            </li>
            <li>
              <a id="settings" class="tooltipped downwards" title="Settings" href="<?php print url("user/".$user->uid."/edit"); ?>">
                <span class="icon">Settings</span>
              </a>
            </li>
            <li>
              <a id="logout" class="tooltipped downwards" title="<?php print t('Log out') ?>" href="/logout">
                <span class="icon"><?php print t('Log out') ?></span>
              </a>
            </li>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="site">
      <div class="container">
        <div class="pagehead dashboard">
          <?php print theme('links', menu_primary_links(), array('class' => 'tabs')); ?>
          <?php if(isset($header)) print $header; ?>
          <?php #print_r($user); ?>
          <?php if ($show_messages && $messages) print $messages; ?>
        </div>
        <div id="nodes" class="nodes">
        <div class="list <?php print $is_admin_page ? " admin": "" ?>">
            <?php if(!empty($tabs)) print $tabs ?>
            <?php if(!empty($content)) print $content ?>
          </div>
          <?php if(!$is_admin_page && !empty($right)): ?>
          <div class="sidebar">
            <?php print $right ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div id="footer">
      <div class="container">
        <?php if(!empty($footer)) print $footer; ?>
      </div>
      <small>This theme is based on the default design of <a href="http://github.com/">GitHub</a> | Icons designed by <a href="http://www.famfamfam.com">FamFamFam.com</a> (Silk theme) | Designed by <a href="http://hron.me">Gabor Garami</a></small> 
    </div>
    <?php print $closure ?>
  </body>
</html>
