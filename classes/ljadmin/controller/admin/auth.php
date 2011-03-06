<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Default admin auth controller. Handles login and logout of admins
 *
 * @todo       Maximize loginattempts and lock IP after x-times failure
 * @package    LJAdmin
 * @author     Lieuwe Jan Eilander
 * @copyright  (c) 2010-2011 Lieuwe Jan Eilander
 */
class Ljadmin_Controller_Admin_Auth extends Ljadmin_Controller_Admin {

  /**
   * Authentication not needed to view this controller
   * @var  boolean
   */
  public $auth_needed = FALSE;
  
  /**
   * Admin login action. Shows loginform and handles auth when $_POST
   * data is available.
   *
   * @return  void
   */
  public function action_login()
  {
    // User tries to login
    if ($_POST)
    {
      // Authenticate username/password combination
      if (Auth::instance()->login($_POST['username'], $_POST['password']))
      {
        // Redirect to admin home
        $this->_redirect('admin', 'home', 'index');
      }

      // Set errormessage and username
      $this->view
        ->set('error', Kohana::message('auth', 'err_login'))
        ->set('_username', $_POST['username']);
    }
  }

  /**
   * Admin logout action
   *
   * @return  void
   */
  public function action_logout()
  {
    // Logout user
    Auth::instance()->logout();

    // Redirect to admin login
    $this->_redirect('admin', 'auth', 'login');
  }

}
