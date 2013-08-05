<?php

/**
 * implementation of hook_rules_condition_info()
 */
function cfdp_uf_rules_condition_info() {
  return array(
    'cfdp_uf_open_to_posts' = array(
      'group' => 'comments',
      'label' => t('Comment is published'),
      'arguments' => array(
        'comment' => array(
            'type' => 'comment', 
            'label' => t('updated comment')
        ),
        'comment_unchanged' => array(
            'type' => 'comment', 
            'label' => t('unchanged comment'), 
            'handler' => 'rules_events_entity_unchanged'
        ),
      ),
      'module' => 'cfdp_uf',
    ),
  );
}
