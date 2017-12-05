<?php
include 'Customers.php';
$obj=new Customers();
extract($_POST);
//Saved Records Inside Database
if(isset($save))
{
    //here admin is table name, $userName and $pass  entered by html form
    $obj->saveRecords("customers","$Name",$Mobile,"$Email","$Postal",$Bdate);
    $obj->displayall("customers");
    echo "New record created successfully.";
 
}

?>