<?php

try{
 
  $con=new PDO("mysql:host=localhost:3306;
dbname=bewgle","root","prajay");
  
 // echo 'connected';
}
 catch (PDOException $ex)
 {
  
  echo $ex->getMessage();

}

