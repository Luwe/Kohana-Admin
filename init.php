<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Set the default routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 * 
 * Default routes provided are:
 * - admin module route
 */     
Route::set('admin', 'admin(/<controller>(/<action>(/<id>)))(/<overflow>)', array(
    'overflow' => '.*'
  ))
  ->defaults(array(
    'directory'  => 'admin',
    'controller' => 'home',
    'action'     => 'index',
  ));
