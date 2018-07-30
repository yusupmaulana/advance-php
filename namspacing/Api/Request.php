<?php
// Api/Request.php

namespace Api;

use RequestInterface;

class Request implements RequestInterface
{
	public function handle()
	{
		echo 'Handle API Request';
	}
}




 ?>
