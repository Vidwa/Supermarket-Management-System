
<!DOCTYPE html>
<html>
<head>
   <title>Inventory System</title>
   <style type="text/css">
      table{
      	border:10 px solid red;
      }
      th{
      	border-bottom: 5px solid #000;
      }
      td{
      	border-bottom: 2px solid #666;
      }
   </style>
</head>

<body>
    <style>
    body {
        background-image: url("blerje-1.jpg");
    } 
 
    </style>
	   
      <?php

   
   $purchaseid="";
   $psupplierid="";
   $pproductid="";
   $punitprice="";
   $pqnty="";
    
   $db=mysqli_connect('localhost','root','','supermarketnew');
   
   
      
     //$query=mysqli_query($db,"SELECT PurchaseId,FORMAT (SUM(Qnty * UnitPrice),2) Amount FROM PURCHASE GROUP BY PurchaseId ORDER BY SUM(Qnty * UnitPrice) DESC");
     $query=mysqli_query($db,"SELECT PurchaseId,FORMAT (SUM(Qnty * UnitPrice),2) Amount FROM PURCHASE GROUP BY PurchaseId ");
      echo "<table>";
      echo "<tr><th>Purchase Id</th><th>Amount</th></tr>";

      while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){
      	echo "<tr><td>";
      	echo $row[0];
      	echo "</td><td>";
      	echo $row[1];
      	echo "</td></tr>";
      }
     
     echo "</table>";
             
   


   if(!$db){
   echo "Error: " . mysqli_error($link);
   }
 
?>

</body>
</html>