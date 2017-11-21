<!--DATABASE CONNECTION STARTS HERE-->
<?php

   $host="localhost";
   $dbuser="root";
   $pass="";
   $dbname="dbms_project";
   $conn=mysqli_connect($host, $dbuser, $pass,$dbname);
   if (mysqli_connect_errno()) {

    
    die("Connection Failed!".mysqli_connect_errno());
   } 
   else{
    echo "Connected to database {$dbname}";
   }

  
?>
<!--DATABASE CONNECTION ENDS HERE--> 

<html>
<head>

  <!--TABLE DESIGN STARTS HERE-->
      <style>
#tabledesign {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tabledesign td, #tabledesign th {
    border: 1px solid #ddd;
    padding: 8px;
}

#tabledesign tr:nth-child(even){background-color: #f2f2f2;}

#tabledesign tr:hover {background-color: #ddd;}

#tabledesign th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<!--TABLE DESIGN ENDS HERE-->



<title>nsuss members</title>

</head>


<body>
<h2>South University Shangskritik Shangathan All members </h2>
<!--Search button code-->
     

<table id="tabledesign">
<tr>
    <th>Member ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Club ID</th>
    <th>Age</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Semester</th>
</tr>

  
   <?php

      $sql="SELECT * from member where club_id='NSU02' ";       ///////////////// SQL QUERY ////////////////////

      $res=mysqli_query($conn, $sql);



      
      if (!$res) 
       {
        die("Query Failed");
      } 

      while ($row=mysqli_fetch_assoc($res)) {

         echo "<tr>";
         echo "<td>".$row['member_id']."</td>";
         echo "<td>".$row['member_fname']."</td>";
         echo "<td>".$row['member_lname']."</td>";
         echo "<td>".$row['club_id']."</td>";
         echo "<td>".$row['age']."</td>";
         echo "<td>".$row['address']."</td>";
         echo "<td>".$row['contact']."</td>";
         echo "<td>".$row['email']."</td>";
         echo "<td>".$row['semester']."</td>";

echo "</tr>";
        
            }               ////// WHILE LOOP ENDS ///////
        
mysqli_free_result($res);

?>
    
 </table>      <!--TABLE ENDS-->

</body>
</html>


<!--PHP CLOSING FUNCTION--> 
<?php
 mysqli_close($conn);

?>

<!--CODE ENDS-->