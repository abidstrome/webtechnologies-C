<?php
    $title= "Home";
    include('header.php');
    
    

?>


    
    

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">

                  <form action="../../controller/user/dashCheck.php" method="post">
                    <br><br><br><br><br>
                    <fieldset align ="center" style="width:60%;  margin:  0px auto;" >
                        
                        <legend><b>FLYCASH Services</b></legend>
                   
                          <button type="submit" name="sendmoney">
                          <img src="../../assets/sendmoney.png"  alt="sendmoney" width="100" height="50"/>
                          <br/>
                          Send Money
                        </button >


                        <button type="submit" name="recharge">
                          <img src="../../assets/recharge.png" alt="recharge" width="100" height="50"/>
                          <br/>
                          Mobile Recharge
                        </button>


                        <button type="submit" name="cashin" >
                          <img src="../../assets/cashin.png" alt="cashin" width="100" height="50"/>
                          <br/>
                          Cash In
                        </button >


                        <button type="submit" name="cashout">
                          <img src="../../assets/cashout.png" alt="cashout" width="100" height="50"/>
                          <br/>
                          Cash out
                        </button>


                        <br><br><br><br>

                        <button type="submit" name="payment">
                          <img src="../../assets/payment.png" alt="payment" width="100" height="50"/>
                          <br/>
                          Payment
                        </button>


                        <button type="submit" name="bill">
                          <img src="../../assets/bill.png" alt="bill" width="100" height="50"/>
                          <br/>
                          Pay Bill
                        </button>


                        <button type="submit" name="donate">
                          <img src="../../assets/donate.png" alt="donate" width="100" height="50"/>
                          <br/>
                          Donate
                        </button>


                        <button type="submit" name="history">
                        <img src="../../assets/statement.png" alt="statement" width="100" height="50"/>
                          <br/>
                          Statement
                        </button>
                        <br><br>
                        
                    </fieldset>
                    <br><br><br><br><br>
                </form>

                </td>
                
                
            </tr>

<?php
 include('footer.php');
 ?>