<?php
abstract class Controller{
	private $request;
	private $action;

	public function __construct($action, $request){
	   $this->action 	= $action;
	   $this->request 	= $request;

	}

	public function executeAction(){
	      return $this->{$this->action}();
	}

	protected function returnView($viewmodel, $fullview){
          $view = 'views/'.get_class().'/'.$this->action.'.php';
          if($fullview){
             require('views/mais.php');
          }else{
          	require($view);
          }
	}

}