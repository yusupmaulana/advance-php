<?php

class Errorable
{
  public static function calculate(int $number)
  {
    return ($number % 0);
  }
}

try{
  Errorable::calculate(7);
}catch(Exception $e){
  echo "tidak akan masuk kesini";
  echo PHP_EOL;
}catch(DivisionByZeroError $e){
  echo $e->getMessage();
  echo PHP_EOL;
}finally{
  echo "apapun yang terjadi, ini harus tetap dieksekusi";
  echo PHP_EOL;
}

echo "ini tetap akan dieksekusi";
echo PHP_EOL;

 ?>
