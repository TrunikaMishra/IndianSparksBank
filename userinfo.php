<?php

$con = mysqli_connect('localhost', 'root')

if($con){
  echo "Data is successfully submitted";
}
else{
  echo "Error in submitting";
}

?>