<?php
if(isset($_GET['del_customer'])){
    $del_id = $_GET['del_customer'];
    $del_cust = "delete from customers where cust_id='$del_id'";
    $run_del = mysqli_query($con,$del_cust);
    if($run_del){
        header('location: index.php?view_customers');
    }
}