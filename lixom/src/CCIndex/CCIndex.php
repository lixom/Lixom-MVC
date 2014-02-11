<?php
/**
* Standard controller layout.
* 
* @package LixomCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $lix;
      $lix->data['title'] = "The Index Controller";
   }

}
?>