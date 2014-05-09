<?php
/**
* Holding a instance of CLixom to enable use of $this in subclasses.
*
* @package LixomCore
*/
class CObject {

  /**
	 * Members
	 */
	protected $lix;
	protected $config;
	protected $request;
	protected $data;
	protected $db;
	protected $views;
	protected $session;
	protected $user;
	 	 
	/**
   * Constructor, can be instantiated by sending in the $ly reference.
   */
  protected function __construct($lix=null) {
    if(!$lix) {
      $lix = CLixom::Instance();
    }
    $this->lix			= &$lix;
    $this->config   = &$lix->config;
    $this->request  = &$lix->request;
    $this->data     = &$lix->data;
    $this->db       = &$lix->db;
    $this->views    = &$lix->views;
    $this->session  = &$lix->session;
    $this->user     = &$lix->user;
  }
  
  /**
	 * Wrapper for same method in CLixom. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->lix->RedirectTo($urlOrController, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CLixom. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
    $this->lix->RedirectToController($method, $arguments);
  }


	/**
	 * Wrapper for same method in CLixom. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->lix->RedirectToControllerMethod($controller, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CLixom. See there for documentation.
	 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->lix->AddMessage($type, $message, $alternative);
  }


	/**
	 * Wrapper for same method in CLixom. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->lix->CreateUrl($urlOrController, $method, $arguments);
  }
 }