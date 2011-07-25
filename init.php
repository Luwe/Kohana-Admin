<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Provide admin route
 */
Route::set('admin', 'admin(/<controller>(/<action>(/<id>(/<overflow>))))',
  array(
    'overflow' => '.*',
  ))
  ->defaults(array(
    'directory' => 'admin',
    'format' => '.html',
    'controller' => 'home',
    'action' => 'index',
  ));
