<?php

//require __DIR__ .'/../core/start.php';

//create addMember class
class AddMember{
	
	public $first_name;
	public $last_name;
	public $email;
	


	//created constructor class
	public function __construct()
	{

		$first_name= $this->first_name;
		$last_name= $this->last_name;
		$email = $this->email;



	}

	public function addMember($first_name, $last_name, $email)
	{

		//print_r($output);
		$output = [ $first_name, $last_name, $email];
		foreach ($output as $value) {
			# code...
			 echo $value;

			}
		
	}


}


echo 'Hello';



//$member = new AddMember();

//$member ->AddMember('John', 'Wilson', 'jwilson@yahoo.com');