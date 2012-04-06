<?php

function octocat_preprocess_page(&$vars) {
  global $user;
  
  // User picture
  $vars['picture'] = '';
  // Stolen from user.module :-) 
  $picture = '';
  if(!empty($user->picture)  && file_exists($account->picture)) {
    $picture = file_create_url($account->picture);
  } 
  else if(function_exists('gravatar_get_gravatar')) {
      $picture = gravatar_get_gravatar($user->mail);
  }
  else if(variable_get('user_picture_default', '')) {
    $picture = variable_get('user_picture_default', '');
  }

  if(isset($picture)) {
    $alt = t("@user's picture", array('@user' => $user->name ? $user->name : variable_get('anonymous', t('Anonymous'))));
    $vars['user_picture'] = theme('image', $picture, $alt, $alt, array('width' => 20, 'height' => 20), FALSE);
  } 
}
