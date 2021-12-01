
<?php
    session_start();
    

    if(isset($_POST['submit'])){
        

        $username =$_POST['username'];
        $password = $_POST['password'];

         if($username == "" || $password == "")
         {
            echo "Please enter username and password";
          }
        else
        {
            //$user = $_SESSION['c_user'];
            $myfile= file_get_contents('../model/user.json');
            $current_data = json_decode($myfile,true);
            foreach ($current_data as $search)
            {
                


                if($search['username'] == $username && $search['password'] == $password){
                setcookie('flag', true, time()+3600, '/');


                
                $user_name=$search['name'];
                $user_number=$search['mobilenumber'];
                $user_password=$search['password'];
                $user_gender=$search['gender'];
                $user_email=$search['email'];
                $user_dd=$search['dd'];
                $user_mm=$search['mm'];
                $user_yyyy=$search['yyyy'];
                $user_balance=$search['balance'];


                $_SESSION['name']=$user_name;
                $_SESSION['password']=$user_password;
                $_SESSION['mobilenumber']=$user_number;
                $_SESSION['gender']=$user_gender;
                $_SESSION['email']=$user_email;
                $_SESSION['dd']=$user_dd;
                $_SESSION['mm']=$user_mm;
                $_SESSION['yyyy']=$user_yyyy;
                $_SESSION['balance']=$user_balance;


                header('location: ../view/dashboard.php');
                }
                else
                {
                    echo "Username or password is invalid";
                } 
            }
            
        }

    }
    else if(isset($_POST['signup']))
        {
            header('location:../view/registration.html');
        }
?>