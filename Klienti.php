<?php
	/**
	 *
	 */
	class Klienti
	{
		private $emri;
		private $mbiemri;
		private $email;
		private $numri;

		public function __construct($emri,$mbiemri,$email,$numri)
		{
			$this->emri = $emri;
    		$this->mbiemri = $mbiemri;
    		$this->email = $email;
    		$this->numri = $numri;
		}
		public function getEmri(){
			return $this->emri;
		}

		public function getMbiemri(){
			return $this->emri;
		}

		public function getEmail(){
			return $this->emri;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getNumri(){
			return $this->emri;
		}
		public function setNumri($numri){
			$this->numri = $numri;
		}

		public function students($email)
		{
			if(substr($email, -3)=="edu")
			{
				$array = array('Ju', 'jeni', 'student!');
				echo implode(" ", $array);
				echo " sepse email-i juaj eshte: " . $email;
			}

			else if(substr($email, -11)=="hotmail.com")
			{
				$replaced = str_replace("hotmail.com","outlook.com",$email);
				echo "Email që keni dhënë është: ". $replaced;
			}
		}
	}



 ?>
