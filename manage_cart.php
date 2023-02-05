<?php
session_start();
// session_destroy();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                // echo "<script> alert('Item Already Added'); 
                // window.location.href='index.php';
                // </script>";
                $_SESSION['cart_already_added_alert']=true;
                header("location:index.php");
            }
            
            else
            {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array( 'Item_Id'=>$_POST['Item_Id'],'Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Item_Price'],'Quantity'=>$_POST['Quantity']);
                // echo "<script> alert('Item Added'); 
                //     window.location.href='index.php';
                //     </script>";
                $_SESSION['cart_added_alert']=true;
                header("location:index.php");
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Id'=>$_POST['Item_Id'],'Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Item_Price'],'Quantity'=>$_POST['Quantity']);
            // echo "<script> alert('Item Added'); 
            //     window.location.href='index.php';
            //     </script>";
            $_SESSION['cart_added_alert']=true;
                header("location:index.php");
        }
    }
    if(isset($_POST['Remove_Item']))
    {
        header("location:shoping-cart.php");

        foreach($_SESSION['cart'] as $key =>$value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                unset($_SESSION['cart_total']);
                if(isset($_SESSION['cart']))
                {
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                }
                echo "<script>
                    alert('Item Removed');
                    </script>";

            }
        }
    }
    if(isset($_POST['Make_Purchase']))
    {
        if(isset($_SESSION['cart_total']))
        {
            if(isset($_SESSION['username']))
            {
                header("location:checkout.php");
            }
            else
            {
                echo "<script>
                alert('Login before Make Purchase');
                window.location.href='shoping-cart.php';
                </script>";
            }
        }
        else
        {
            echo "<script>
                alert('Cart is empty');
                window.location.href='shoping-cart.php';
                </script>";

        }

    }
    if(isset($_POST['Place_Order']))
    {
        require 'dbcon.php';
        $date=date('Y-m-d');
        $order_id=rand();
        $user_id=$_SESSION['usr_id'];
        $subtotal=$_POST['subtotal'];
        if($_POST['Payment']=='cod')
        {
            $payment=1;
        }
        else
        {
            $payment=2;
        }

        $qry_order= "INSERT INTO `orders` (`order_id`, `cust_id`, `amount`, `date`,`payment_mode`,`status`) VALUES ('$order_id',$user_id,'$subtotal','$date','$payment',2)";
        $result = mysqli_query($con,$qry_order);
       
        foreach($_SESSION['cart'] as $key =>$value)
                                {
                                    
                                    $Item_id=$value['Item_Id'];
                                    $Quantity=$value['Quantity'];
                                    $qry_order_items= "INSERT INTO `order_items` (`oi_id`, `order_id`, `cust_id`, `item_id`, `quantity`) VALUES (NULL, '$order_id', '$user_id', '$Item_id', '$Quantity')";
                                    mysqli_query($con,$qry_order_items);
                                    
                                    $_SESSION['recent_order_id']=$order_id;
                                    $_SESSION['recent_order_subtoal']=$subtotal;

                                }

       

        if($result)
        {   
            header("location:placed.php");
        }
        else
        {
            echo 'oops something went wrong';
        }
    //    echo "<script> 
    //            alert('order is placed');
    //            window.location.href='index.php';
    //            </script>
    //         ";
    }
}
?>