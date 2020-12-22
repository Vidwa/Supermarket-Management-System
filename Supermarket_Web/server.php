<?php

   session_start();
   $username="";
   $password="";
   $productcode="";
   $productname="";
   $supid="";
   $quantity="";
   $cost="";
   $unitprice="";
   $supplierid="";
   $suppliername="";
   $supaddress="";
   $supemail="";
   $supconno="";
   $customerid="";
   $customername="";
   $cusaddress="";
   //$email="";
   $cuscontactno="";
   $employeeid="";
   $employeename="";
   $empgender="";
   $empaddress="";
   $empdob="";
   $empconno="";
   $empsalary="";
   $jobtype="";
   $List="";
   $List1="";
   $List2="";
   $value="";
   $purchaseid="";
   $psupplierid="";
   $pproductid="";
   $punitprice="";
   $pqnty="";
   $salesid="";
   $scustomerid="";
   $sproductid="";
   $sunitprice="";
   $sqnty="";
   $errors=array();

   //Connect to the database  
   $db=mysqli_connect('localhost','root','','supermarketnew');

   function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
   
   //if the login button is clicked
   if(isset($_POST['login'])){
   	$username=$_POST['username'];
    $password=$_POST['password'];

   
       //ensure that form field are filled properly
       if(empty($username)&&empty($password)){
          array_push($errors, "Enter Username & Password");
       }else if(empty($username)){
          array_push($errors, "Enter Username");
       }else if(empty($password)){
          array_push($errors, "Enter Password");
       }else{

       
       	//$passwords=md5($password);
       
       $query=mysqli_query($db,"SELECT USERNAME,PASSWORD FROM USER WHERE USERNAME='$username' AND PASSWORD='$password'");

         if(count($errors) ==0 && count($query)>0){  
            $_SESSION['SUCCESS'];
           //$_SESSION['SUCCESS']="You are now logged in";
           header('location: index.php');//redirect to home

         }else{
         	array_push($errors, "Invalid Login");

         }
         
        }
      }


      if(isset($_POST['Product'])){
      	
           header('location: products.php');//redirect to products


      }

      if(isset($_POST['Supplier'])){
      	
           header('location: supplier.php');//redirect to supplier

      }

      if(isset($_POST['Customer'])){
      	
           header('location: customer.php');//redirect to supplier
      }

      if(isset($_POST['Employee'])){
      	
           header('location: employee.php');//redirect to supplier
      }


      if(isset($_POST['Sales'])){
      	
           header('location: sales.php');//redirect to supplier
      }

      if(isset($_POST['Purchase'])){
      	
           header('location: purchase.php');//redirect to supplier
      }

      //options in product
      if(isset($_POST['proinsert'])){
      	   $productcode=$_POST['productcode'];
          $productname=$_POST['productname'];
          $supid=$_POST['supid'];
          $quantity=$_POST['quantity'];
          $cost=$_POST['cost'];
          $unitprice=$_POST['unitprice'];
          $List=$_POST['List'];
          $List1=$_POST['List1'];
          $List2=$_POST['List2'];
          
            $query=mysqli_query($db,"INSERT INTO PRODUCTS VALUES ('$productcode','$productname','$List','$List1','$supid','$cost','$unitprice','$List2','$quantity')");
            echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='products.php';
                </script>";
           
        }
    
        if(isset($_POST['prodelete'])){
      	   $productcode=$_POST['productcode'];
           $query=mysqli_query($db,"DELETE FROM PRODUCTS WHERE PRODCODE=$productcode");
                echo "<script type='text/javascript'>alert('Successfully deleted');
                window.location='products.php';
                </script>";
        }

        if(isset($_POST['proview'])){
      	   $productcode=$_POST['productcode'];
      	   

      	   //$productname="";
           //$query=mysqli_query($db,"CREATE VIEW VIRTVIEWPROD AS SELECT * FROM PRODUCTS");
           $query=mysqli_query($db,"SELECT * FROM PRODUCTS WHERE PRODCODE=$productcode");
           while ($row    = mysqli_fetch_array($query,MYSQLI_NUM))

            {
            	//$List=$_POST['List'];
               //$List1=$_POST['List1'];
               //$List2=$_POST['List2'];
               

                $productname = $row[1];
                $supid=$row[4];
                $quantity=$row[8];
                $cost=$row[5];
                $unitprice=$row[6];


                
                $List=$row[2];
                //$List.DataTextField($row[2]);
                //$_POST['List'];
                //$na=get_data($List);
                //$List1= "<option value='$row[3]'>".$row[3]."</option>";
                $List1=$row[3];
                $List2=$row[7];
               
               echo "$row[3]";
               echo "$List1";
            }

        }

        if(isset($_POST['proclear'])){
      	   $productcode="";
      	   $productname="";
           $supid="";
           $quantity="";
           $cost="";
           $unitprice="";
           $List="";
           $List1="";
           $List2="";
          
          header('location: products.php');
            
          }

          if(isset($_POST['proupdate'])){
           	
      	   $productcode=$_POST['productcode'];
          $productname=$_POST['productname'];
          $supid=$_POST['supid'];
          $quantity=$_POST['quantity'];
          $cost=$_POST['cost'];
          $unitprice=$_POST['unitprice'];
          $List=$_POST['List'];
          $List1=$_POST['List1'];
          $List2=$_POST['List2'];
           
           $query=mysqli_query($db,"UPDATE PRODUCTS SET PRODNAME='$productname',Category='$List',Company='$List1',SupplierId='$supid',Cost='$cost',UnitPrice='$unitprice',QntyType='$List2',Qnty='$quantity' WHERE PRODCODE=$productcode");
           echo "<script type='text/javascript'>alert('Successfully Updated');
                window.location='customer.php';
                </script>";
            
          }

          //options in supplier
          if(isset($_POST['supinsert'])){
      	  $supplierid=$_POST['supplierid'];
          $suppliername=$_POST['suppliername'];
          $supaddress=$_POST['supaddress'];
          $supemail=$_POST['supemail'];
          $supconno=$_POST['supconno'];
          //$_SESSION['SUCCESS'];
            $query=mysqli_query($db,"INSERT INTO SUPPLIER VALUES ('$supplierid','$suppliername','$supaddress','$supemail','$supconno')");
            echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='supplier.php';
                </script>";
           
          }

          if(isset($_POST['supdelete'])){
      	    $supplierid=$_POST['supplierid'];
           $query=mysqli_query($db,"DELETE FROM SUPPLIER WHERE SupplierId=$supplierid");
                echo "<script type='text/javascript'>alert('Successfully deleted');
                window.location='supplier.php';
                </script>";
          }

           if(isset($_POST['supview'])){
      	   $supplierid=$_POST['supplierid'];
    
           $query=mysqli_query($db,"SELECT * FROM SUPPLIER WHERE SupplierId=$supplierid");
           while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){

            $supplierid=$row[0];
            $suppliername=$row[1];
            $supaddress=$row[2];
            $supemail=$row[3];
            $supconno=$row[4];
          
           }
          }

           if(isset($_POST['supclear'])){
           	
      	    $supplierid="";
            $suppliername="";
            $supaddress="";
            $supemail="";
            $supconno="";
          
            header('location: supplier.php');
            
          }

          //options in customer
          if(isset($_POST['cusinsert'])){
      	   $customerid=$_POST['customerid'];
           $customername=$_POST['customername'];
           $cusaddress=$_POST['cusaddress'];
           $cuscontactno=$_POST['cuscontactno'];
           $query=mysqli_query($db,"INSERT INTO CUSTOMER VALUES ('$customerid','$customername','$cusaddress','$cuscontactno')");
           echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='customer.php';
                </script>";
             //header('location: customer.php');//redirect to supplier
           
          }

          if(isset($_POST['cusdelete'])){
      	    $customerid=$_POST['customerid'];
           $query=mysqli_query($db,"DELETE FROM CUSTOMER WHERE CustomerId=$customerid");
                echo "<script type='text/javascript'>alert('Successfully deleted');
                window.location='customer.php';
                </script>";
          }

          if(isset($_POST['cusview'])){
      	   $customerid=$_POST['customerid'];
    
           $query=mysqli_query($db,"SELECT * FROM CUSTOMER WHERE CustomerId=$customerid");
           while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){

            $customerid=$row[0];
            $customername=$row[1];
            $cusaddress=$row[2];
            $cuscontactno=$row[3];
            
          
           }
          }

          if(isset($_POST['cusclear'])){
           	
      	    $customerid="";
            $customername="";
            $cusaddress="";
            $cuscontactno="";
           header('location: customer.php');
            
          }
          if(isset($_POST['cusupdate'])){
           	
      	   $customerid=$_POST['customerid'];
           $customername=$_POST['customername'];
           $cusaddress=$_POST['cusaddress'];
           $cuscontactno=$_POST['cuscontactno'];
           
           $query=mysqli_query($db,"UPDATE CUSTOMER SET CusName='$customername',Address='$cusaddress',ConNo='$cuscontactno' WHERE CustomerId=$customerid");
           echo "<script type='text/javascript'>alert('Successfully Updated');
                window.location='customer.php';
                </script>";
            
          }

          if(isset($_POST['empinsert'])){
      	   $employeeid=$_POST['employeeid'];
           $employeename=$_POST['employeename'];
           $empgender=$_POST['empgender'];
           $empaddress=$_POST['empaddress'];
           $empconno=$_POST['empconno'];
           $empdob=$_POST['empdob'];
           $jobtype=$_POST['jobtype'];
           $empsalary=$_POST['empsalary'];
           
           $query=mysqli_query($db,"INSERT INTO EMPLOYEE VALUES ('$employeeid','$employeename','$empgender','$empaddress','$empconno','$empdob','$jobtype','$empsalary')");
           echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='employee.php';
                </script>";
             //header('location: products.php');//redirect to supplier
           
          }

          if(isset($_POST['empdelete'])){
      	    $employeeid=$_POST['employeeid'];
           $query=mysqli_query($db,"DELETE FROM EMPLOYEE WHERE EmpId=$employeeid");
                echo "<script type='text/javascript'>alert('Successfully deleted');
                window.location='employee.php';
                </script>";

          }


          if(isset($_POST['empview'])){
      	   $employeeid=$_POST['employeeid'];
    
           $query=mysqli_query($db,"SELECT * FROM EMPLOYEE WHERE EmpId=$employeeid");
           //$query=mysqli_query($db,"SELECT EmpId,EmpName,EmpType FROM EMPLOYEE");
          // if (mysqli_num_rows($query) > 0) {
           while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){
           /*
           while($row = mysqli_fetch_assoc($query)) {
           	echo "Empid: " . $row["EmpId"]. " - EmpName: " . $row["EmpName"]. " " . $row["EmpType"]. "<br>";
           }

           */
           	
            $employeeid=$row[0];
            $employeename=$row[1];
            $empgender=$row[2];
            //$value="$empgender";
            //$value=$row[2];
            $empaddress=$row[3];
            $empconno=$row[4];
            $empdob=$row[5];
            $jobtype=$row[6];
            $empsalary=$row[7];

            
            //echo "$empgender";
              //if($value=="$empgender"){
                   //echo "$value";
              //}
            }
           //}
          }

          

          if(isset($_POST['empclear'])){
           	$employeeid="";
            $employeename="";
            $empgender="";
            $empaddress="";
            $empconno="";
            $empdob="";
            $jobtype="";
            $empsalary="";
      	    
           header('location: employee.php');
            
          }

          if(isset($_POST['empupdate'])){
           	
      	   $employeeid=$_POST['employeeid'];
           $employeename=$_POST['employeename'];
           $empgender=$_POST['empgender'];
           $empaddress=$_POST['empaddress'];
           $empconno=$_POST['empconno'];
           $empdob=$_POST['empdob'];
           $jobtype=$_POST['jobtype'];
           $empsalary=$_POST['empsalary'];
           
           $query=mysqli_query($db,"UPDATE EMPLOYEE SET EmpName='$employeename',Address='$empaddress',ConNo='$empconno',DOB='$empdob',EmpType='$jobtype' WHERE EmpId='$employeeid'");
           echo "<script type='text/javascript'>alert('Successfully Updated');
                window.location='customer.php';
                </script>";
            
          }

          if(isset($_POST['purview'])){

          	header('location: disppurchase.php');
          }

          if(isset($_POST['salview'])){

          	header('location: dispsale.php');
          }
      

          if(isset($_POST['salinsert'])){
      	   $salesid=$_POST['salesid'];
           $scustomerid=$_POST['scustomerid'];
           $sproductid=$_POST['sproductid'];
           $sunitprice=$_POST['sunitprice'];
           $sqnty=$_POST['sqnty'];
           
           $query=mysqli_query($db,"INSERT INTO SALES VALUES ('$salesid','$scustomerid','$sproductid','$sunitprice','$sqnty')");
             //header('location: sales.php');//redirect to supplier
           echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='sales.php';
                </script>";
           
          }

          if(isset($_POST['salclear'])){
           $salesid="";
           $scustomerid="";
           $sproductid="";
           $sunitprice="";
           $sqnty="";
      	    
           header('location: sales.php');
            
          }

          if(isset($_POST['purinsert'])){
      	   $purchaseid=$_POST['purchaseid'];
           $psupplierid=$_POST['psupplerid'];
           $pproductid=$_POST['pproductid'];
           $punitprice=$_POST['punitprice'];
           $pqnty=$_POST['pqnty'];
           
           $query=mysqli_query($db,"INSERT INTO PURCHASE VALUES ('$purchaseid','$psupplerid','$pproductid','$punitprice','$pqnty')");
            // header('location: purchase.php');//redirect to supplier
           echo "<script type='text/javascript'>alert('Successfully Inserted');
                window.location='products.php';
                </script>";
           
          }


          if(isset($_POST['purclear'])){
           $purchaseid="";
           $psupplierid="";
           $pproductid="";
           $punitprice="";
           $pqnty="";
      	    
           header('location: purchase.php');
            
          }

/*

           if( mysql_num_row( $query){
            $row = mysql_fetch_assoc( $query ) //get one (first) result
            }
           $productname=$row['PRODNAME'];

*/
        


      if(!$db){
   echo "Error: " . mysqli_error($link);
   }

?>

