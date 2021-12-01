<?php 

if(isset($_POST['sendmoney']))
{
    
    echo "send";
    header('location:../view/sendmoney.php');

}
else if(isset($_POST['recharge']))
{
    //echo "recharge";
    header('location:../view/recharge.php');
}
else if(isset($_POST['cashin']))
{
    
    header('location:../view/cashin.php');
}
else if(isset($_POST['cashout']))
{
    header('location:../view/cashout.php');
}


else if(isset($_POST['payment']))
{
    
    header('location:../view/payment.php');
}
else if(isset($_POST['bill']))
{
    
    header('location:../view/bill.php');
}
else if(isset($_POST['donate']))
{
    
    header('location:../view/donate.php');
}
else if(isset($_POST['history']))
{
    echo "history";
    header('location:../view/statement.php');
}

?>