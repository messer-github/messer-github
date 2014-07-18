<?php

/**
 * implementation of tema1_onelocon_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Single column'),
  'category' => t('Columns: 1'),
  'icon' => 'onecolon.png',
  'theme' => 'onecolon',
  'css' => 'onecolon.css',
  'regions' => array(
'top_left' => t('Top Left'),
'top_right' => t('Top Right'),
'middle_left' => t('Middle Left'),
'middle_center' => t('Middle Center'),
'middle_right' => t('Middle Right'),
'bottom' => t('Bottom')
),
);
