<?php 

session_start();
    $search_key = $_SESSION['mobilenumber'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dd=$_POST['dd'];
    $mm=$_POST['mm'];
    $yyyy=$_POST['yyyy'];
    
if(isset($_POST['submit']))
  {
  	

    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['dd']=$dd;
    $_SESSION['mm']=$mm;
    $_SESSION['yyyy']=$yyyy;
        
if($name == ""|| $email == "" || $dd == "" || $mm == ""|| $yyyy == ""){
            echo "Please fill all information<br>";

        }else{
             if (strpos($email,'@') == true && strpos($email,'.') == true)
             {
                if ($dd<=31 && $dd>0 && $mm<= 12 && $mm>0 && $yyyy>1900 && $yyyy<=2005)
                {
                    $myfile= file_get_contents('../model/user.json');
                    $current_data = json_decode($myfile,true);

                    foreach ($current_data as $search=>$val)
                        if($val['mobilenumber']== $search_key)
                        {
                            $current_data[$search]['name']=$name;
                            $current_data[$search]['email']=$email;
                            $current_data['gender']=$_POST['gender'];
                            $current_data[$search]['dd']=$dd;
                            $current_data[$search]['dd']=$mm;
                            $current_data[$search]['yyyy']=$yyyy;




                            $writedata=json_encode($current_data);
                            if (file_put_contents('../model/user.json',$writedata))
                            {

                              
                            
                                 header('location:../view/dashboard.php');
                            }
                            else
                            {
                                echo "error to update";
                            }
        }

                }else{
                        echo " Please Enter A valid Birth Date";
                        echo "<br>";
                                }

             }else{
                echo "Inavlid Email";
                echo "<br>";
             }

        }
     }
?>