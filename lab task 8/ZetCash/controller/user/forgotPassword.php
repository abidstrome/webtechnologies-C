<?php 

if(isset($_POST['change'])){
    session_start();
    $current_password=$_POST['cpassword'];
    $password=$_POST['npassword'];
    $re_password=$_POST['rnpassword'];
    
   if($password == $current_password)
   {
    echo "Old password and new Password can not be same";
   }
   else
   {
        if($password!=$re_password)
            {
        echo "New password and Confirm password must have to be same";
       }
      
       else{
          
                                        if (strlen($password)>=8 && strlen($password)<=20 )
                                        {
                                            $uppercase= array(
                                                'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'
                                                );
                                        $lowercase= array(
                                                'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'
                                                );
                                        $numbers = array('0','1','2','3','4','5','6','7','8','9');
                        
                                        $regularExpression= array(
                                            '!','@','#','$','%','^','&','*','_','-'
                                        );
                        
                                            foreach($regularExpression as $regularkey)
                                            
                                                   if(strchr($password, $regularkey)==true)
                                                    { 
                                                        foreach($lowercase as $lowerkey)
                                                        
                                                            if (strchr( $password, $lowerkey)==true)
                                                            {
                                                                foreach ($uppercase as $upperkey)
                                                                
                                                                    if(strchr($password,$upperkey)==true)
                                                                    {
                                                                       
                        
                                                                         foreach($numbers as $numkey)
                                                                         
                                                                            if(strchr($password,$numkey)==true)
                                                                            {
                                                                                  $search_key = $_SESSION['mobilenumber'];

                                                                                  $myfile= file_get_contents('../model/user.json');
                                                                                  $current_data = json_decode($myfile,true);

                                                                                  foreach ($current_data as $search=>$val)
                                                                                      if($val['mobilenumber']== $search_key)
                                                                                      {
                                                                                          $current_data[$search]['password']=$new_password;
                                                                                          
                                                                                          $writedata=json_encode($current_data);
                                                                                          if (file_put_contents('../model/user.json',$writedata))
                                                                                          {
                                                                                               header('location:../view/dashboard.php');
                                                                                               
                                                                                          }else{
                                                                                              echo "error to Change Password";
                                                                                          }
                                                                                     }   
                        
                                                                            }
                                                                            else{
                                                                                echo "Password Must Contain A Number";
                                                                                echo "<br>";
                                                                                
                                                                            } 
                                                                    }
                                                            } 
                                                    }else{
                                                        echo "Password Must Contain A Special Charecter";
                                                        echo "<br>";
                                                    }
                                        }else{
                                            echo "Password length Must be at least 8 digit";
                                            echo "<br>";
                                        }
   }
   
}
}
 else if(isset($_POST['back']))
        {
            header('location:../view/dashboard.php');
        }
//A4applee
//password!P

?>
                                                                                  