<?php
class User extends DBCommonMethods{
    
    protected function getallUsers(){
       $sql="SELECT * FROM user ";
       $result=$this->connect()->query($sql);
       $numRows = $result->num_rows;
       if($numRows>0){
           while($row = $result->fetch_assoc()){
               $data[]=$row;
           }
           return $data;
       }
        
    }
}
?>