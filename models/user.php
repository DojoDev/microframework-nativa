<?php 
class UserModel extends Model{
	public function register(){
	
	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	$password = md5($post['password']);

	if($post['submit']){
          $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
          $this->bind(':name',$post['name']);
          $this->bind(':email', $post['email']);
          $this->bind(':password', $password);
          $this->execute();
          //Verify
           if($this->lastInsertId()){
            header('Location: '.ROOT_URL.'users/login');
		 }
	  }
	 return;
   }

   public function login(){

    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $password = md5($post['password']);

	if($post['submit']){
          $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
          $this->bind(':email', $post['email']);
          $this->bind(':password', $password);
          $this->execute();
         $row = $this->single();

         if($row){
         	echo"Logado";
         }else{
         	echo"Ops erro ao logar";
         }
	  }
	 return;
   }
}