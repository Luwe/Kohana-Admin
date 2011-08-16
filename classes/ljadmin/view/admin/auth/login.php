<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Login form
 *
 * @package    LJAdmin
 * @author     Lieuwe Jan Eilander
 * @copyright  (c) 2010-2011 Lieuwe Jan Eilander
 */
abstract class Ljadmin_View_Admin_Auth_Login extends View_Admin_Default {

  /**
   * Anti-CSRF token (http://en.wikipedia.org/wiki/Cross-site_request_forgery)
   * @var  string
   */
  public $token;

  /**
   * Errors to be shown when login fails
   * @var  array
   */
  protected $_errors = array();

  /**
   * Entered post variables after login fails
   * @var  array
   */
  protected $_post = array();

  /**
   * Parse errors for use in mustache
   *
   * @return  string
   */
  public function errors()
  {
    $errors = array();
  
    foreach ($this->_errors as $label => $error)
    {
      $errors[] = array('label' => $label, 'error' => $error);
    }

    // Set first item to TRUE
    $errors[0]['first'] = TRUE;

    // Set last item to TRUE
    end($errors);
    $last_item = key($errors);
    $errors[$last_item]['last'] = TRUE;

    return $errors;
  }

  /**
   * Escape and return username
   *
   * @return  string
   */
  public function username()
  {            
    if (empty($this->_post['username']))
      return '';
    
    return HTML::chars($this->_post['username']);
  }

}
