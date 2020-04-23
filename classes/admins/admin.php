<?php 

	
	
	class Admin {

		public $conn;
		public function __construct(){
			$this -> conn = new mysqli ('localhost','root','','oop_crud');			
		}

		

		public function adminRegistration($uname, $email, $hash_pass) {
			
			$sql = "INSERT INTO admin (user_name, user_email, user_pass) VALUES ('$uname','$email','$hash_pass')";
			$this -> conn -> query($sql);
		}


	}



 ?>