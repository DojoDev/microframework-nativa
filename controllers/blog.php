<?php 
class Blog extends Controller{
	 protected function Index(){
	 	$viewmodel = new BlogModel();
	 	$this->ReturnView($viewmodel->Index(), true);
	 }
}