<?php
class ViewUser extends User{
    
    public function ShowallUsers(){
     $datass=$this->getallUsers();
     foreach ($datass as $data){
         echo $data['uid']."<br>";
         echo $data['pass'];
         
     }
        
    }
}
?>
