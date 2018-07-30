<?php  

class A
{
	public function bar()
	{
		echo "bar";
	}

	public static function foo()
	{
		echo "foo";
		// (new A())->bar();
		// (new self())->bar();
		// (new static())->bar();
		static::bar();

	}
}

A::foo();




?>