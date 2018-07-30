<?php  

class ArrayAccessClass implements ArrayAccess
{
	private $container;

	public function offsetSet($offset, $value)
	{
		if(is_null($offset)){
			$this->container[] = $value;
		}else{
			$this->container[$offset] = $value;
		}
	}

	public function offsetExists($offset)
	{
		return isset($this->container[$offset]);
	}

	public function offsetUnset($offset)
	{
		unset($this->container[$offset]);
	}

	public function offsetGet($offset)
	{
		return isset($this->container[$offset]) ? $this->container[$offset] : null;
	}
}

$obj = new ArrayAccessClass();
$obj['name'] = 'Yusup Maulana';
$obj['address'] = 'In your heart';

var_dump($obj);

//Note: Object yang mengimplementasikan interface ArrayAccess hanya dapat digunakan untuk akses array seperti diatas, tidak utk digunakan dalam iterator seperti for atau foreach


?>