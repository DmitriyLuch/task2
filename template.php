<?php

function mybartik_preprocess_user_profile(&$vars){
//  dsm($vars);
//  $wrapper=entity_metadata_wrapper('user',$vars);
//  $img=$wrapper->field_background_image->value();
  $img=file_create_url($vars['field_background_image'][0]['uri']);
  dsm($img, 'img');

  $path = drupal_get_path('theme','mybartik');
  drupal_add_js(array('mybartik_mybg'=>$img),'setting');
  drupal_add_js($path.'/js/bg.js','file');
}