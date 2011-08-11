<?php defined('SYSPATH') or die('No direct script access.');
/** 
 * Highest level controller shell for an admin backend for a basic website.
 * 
 * To keep regular guests from entering admin pages, this controller should be
 * extended by all your admin controllers. 
 *
 * @uses       Modules/Auth
 * @uses       Modules/LJCore 
 * @package    LJAdmin
 * @author     Lieuwe Jan Eilander
 * @copyright  (c) 2010-2011 Lieuwe Jan Eilander
 */
abstract class Ljadmin_Controller_Admin_Core extends Ljcore_Controller_Default {

  /**
   * Authentication needed to watch page
   * @var  boolean
   */
  public $auth_needed = TRUE;

  /**
   * Method which is executed before any action takes place   
   * 
   * @return  void 
   */
  public function before()
  {
    // If auth is needed: check if an admin is logged in
    if (($this->auth_needed === TRUE) AND ( ! Auth::instance()->logged_in('admin')))
    {
      // Redirect to login page
      $this->_redirect('widget', 'auth', 'login', array('directory' => 'admin'));
    }

    // Execute parent method
    parent::before();  
  }

}
