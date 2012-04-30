<?php

function _octocat_get_user_picture($account) {

  // Stolen from user.module :-) 
  $picture = '';
  if(!empty($account->picture)  && file_exists($account->picture)) {
    $picture = file_create_url($account->picture);
  } 
  else if(function_exists('gravatar_get_gravatar')) {
      $picture = gravatar_get_gravatar($account->mail);
  }
  else if(variable_get('user_picture_default', '')) {
    $picture = variable_get('user_picture_default', '');
  }
  return $picture;
}

function octocat_preprocess_page(&$vars) {
  global $user;
  
  // User picture
  $vars['user_picture'] = '';

  $picture = _octocat_get_user_picture($user);

  if(isset($picture) && $picture !== '/') {
    $alt = t("@user's picture", array('@user' => $user->name ? $user->name : variable_get('anonymous', t('Anonymous'))));
    $vars['user_picture'] = theme('image', $picture, $alt, $alt, array('width' => 20, 'height' => 20), FALSE);
  } 

  $vars['is_admin_page'] = preg_match('/^admin/', $_GET['q']);

  if($_GET['q'] == 'admin/build/block') {
    $vars['is_admin_page'] = 0;
  }

}

function octocat_preprocess_comment(&$vars) {
  $comment = $vars['comment'];
  $account = user_load($comment->uid);

  $ago = time() - $comment->timestamp;
  $vars['ago'] = t('%ago ago', array('%ago' => format_interval($ago)));

  $picture = _octocat_get_user_picture($account);

  if(isset($picture)) {
    $alt = t("@user's picture", array('@user' => $account->name ? $account->name : variable_get('anonymous', t('Anonymous'))));
    $vars['picture'] = theme('image', $picture, $alt, $alt, array('width' => 20, 'height' => 20), FALSE);
  } 
}
