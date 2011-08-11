<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Default admin auth controller. Handles login and logout of admins
 *
 * @todo       Maximize loginattempts and lock IP after x-times failure
 * @package    LJAdmin
 * @author     Lieuwe Jan Eilander
 * @copyright  (c) 2010-2011 Lieuwe Jan Eilander
 */
class Ljadmin_Controller_Admin_Auth extends Controller_Admin {

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
    // Redirect user if already logged-in
    if (Auth::instance()->logged_in('admin'))
    {
      $this->_redirect('admin', 'home', 'index');
    }

    // Get or generate security token
    $token = Security::token();
    $this->view->set('token', $token);

    if ($this->request->post())
    {
      // Use validation class to validate input
      $post_validate = Validation::factory($this->request->post())
        ->rule('username', 'not_empty')
        ->rule('password', 'not_empty')
        ->rule('token', 'not_empty')
        ->rule('token', 'Security::check');

      $post = $post_validate->as_array();

      // User tries to login so authenticate input
      if ($post_validate->check())
      {
        if (Auth::instance()->login($post['username'], $post['password']))
        {
          // Redirect to admin home
          $this->_redirect('admin', 'home', 'index');
        }
        else
        {
          // Set authentication error
          $post_validate->error('username', 'invaliduser');
        }
      }

      // Get validation errors
      $errors = $post_validate->errors('auth');

      // Add post variables to form if something went wrong
      $this->view
        ->set('_post', $post)
        ->set('_errors', $errors);
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
