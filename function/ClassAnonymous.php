<?php  

class SebuahClass {}

interface SebuahInterface {}

trait SebuahTrait {}


var_dump(new class(10) extends SebuahClass implements SebuahInterface
{
	private $num;

	public function __construct($num)
	{
		$this->num = $num;
	}

	use SebuahTrait;
})



?>