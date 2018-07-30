<?php

class Connection
{
  public function connect()
  {
    throw new RuntimeException('Anda harus mengimplementasikan method connect() sesuai dengan database driver yang anda gunakana');
  }
}
try {
  $connection = new Connection();
  $connection->connect();
} catch (RuntimeException $e) {
  echo $e->getMessage();
  echo PHP_EOL;
}

echo "ini tetap dieksekusi";
echo PHP_EOL;

 ?>
