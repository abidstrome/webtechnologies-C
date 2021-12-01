<?php
    //session_start();

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobileNumber = $_POST['mobileNumber'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $dd = $_POST['dd']; 
        $mm = $_POST['mm'];
        $yyyy = $_POST['yyyy'];
        

        

        if($name == "" ||$username == "" || $email == "" || $password == "" || $cpassword == ""){
            echo "Please fill all information<br>";

        }else{
                if (ctype_alpha($username)==true)
                {
                    if (strpos($email,'@') == true && strpos($email,'.') == true)
                    {
                        if (ctype_digit($mobileNumber)==true)
                        {
                            if (strlen($mobileNumber)==11)
                            {
                                if ($dd<=31 && $dd>0 && $mm<= 12 && $mm>0 && $yyyy>1900 && $yyyy<=2005)
                                {
                                    if($password == $cpassword ){

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
                                                                                if (file_exists('../model/user.json'))
                                                                                        {
                                                                                            $myfile= file_get_contents('../model/user.json');
                                                                                            $current_data = json_decode($myfile,true);
                        
                                                                                               $user= [
                                                                                                        'name'         =>$name,
                                                                                                        'username'      =>$username,
                                                                                                        'password'      =>$password,
                                                                                                        'mobilenumber'  =>$mobileNumber,
                                                                                                        'email'         =>$email,
                                                                                                        'gender'        =>$gender,
                                                                                                        'dd'            =>$dd,
                                                                                                        'mm'            =>$mm,
                                                                                                        'yyyy'          =>$yyyy,
                                                                                                        'balance'       => 50000
                                                                                                        ];
                                                                                                        $current_data[]=$user;
                                                                                                        $writedata=json_encode($current_data);
                                                                                                        file_put_contents('../model/user.json',$writedata);
                        
                                                                                                        if (file_put_contents('../model/user.json',$writedata))
                                                                                                        {
                        
                                                                                                            header('location:../view/login.html');
                                                                                                            echo "Registration Succesfull";
                                                                                                            
                                                                                                        }
                                                                                                        else{
                                                                                                            echo "Registration failed";
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
                                        
                        
                                    }else{
                                                echo "password & confirm password mismatch..";
                                                
                                                echo "<br>";
                                            }

                                }else{
                                    echo " Please Enter A valid Birth Date";
                                    echo "<br>";
                                }
                                

                            }else{
                                echo "Mobile Number Must Have 11 Digit";
                            }

                        }else{
                            echo "Enter Only digit as mobile Number";
                        }
                        

                    }else
                    {
                        echo "Invalid email";
                        echo "<br>";
                    }
                    
                    }else{
                    echo "UserName Should contain only letters";}         
            
        }
    }
        
            if(isset($_POST['reset']))
            {
                $name == "";
                $username == "";
                $email == "";
                $mobileNumber="";
                $password == "";
                $cpassword == "";
                $gender == "";
                $dd == "";
                $mm == "";
                $yyyy == "";

            }
            
?>