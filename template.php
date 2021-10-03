<?php
/**
* This snippet tells Drupal to override the forum_list function
* and load a custom forum_list.tpl.php layout file
* in the theme folder
* FOUND IN  https://www.drupal.org/node/154325
*/
function phptemplate_forum_list($forums, $parents, $tid) {
return _phptemplate_callback('forum_list', array('forums' => $forums, 'parents' =>$parents, 'tid' =>$tid));
}
?>
