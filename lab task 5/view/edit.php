<?php
    $editname = $_GET['name'];
    $conn = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql = "select * from products where name = $editname";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
</head>
<body>


        <tr>
            
            <td style="border:2px solid black; border-collapse: collapse;">
                
                <form action="../controller/editProducts.php" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:25%; margin:  0px auto;"  >
                        
                        <legend align= "left"><b>Edit PRODUCTS</b></legend>
                        
                        Name<br><input type="text" name="name" value='<?php echo $row["name"];?>' > <br>
                        Buying Price<br><input type="text" name="bprice" value='<?php echo $row["bprice"];?>'  ><br>
                        Selling Price<br><input type="text" name="sprice" value='<?php echo $row["sprice"];?>' ><br>
                        <hr>
                        <input type="checkbox" name="remember_me" value="1"> <b>Display</b><br><br>
                        <hr>
                        <input type="submit" name="save" value="Save"> 

                    </fieldset>
                
                    <br><br><br><br><br>
                </form>
                
            </td>
            
        </tr>
 
    
</body>
</html>