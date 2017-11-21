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



<title>nsuyes_alumni</title>

</head>


<body>
<h2>NSU YES CLUB ALUMNI  INFORMATION</h2>
<!--Search button code-->
<form name="search_form" method="POST" action="nsuyes_alumni.php">                        
   Search: <input type="TEXT" name="search_box" value="">
   <input type="submit" name="search" value="Find">
  
</form>
     

<table id="tabledesign">
<tr>
    <th>Club ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Ex Position ID</th>
    <th>Session</th>
    <th>Alumni email</th>
    
</tr>

  
   <?php

      $sql="SELECT * FROM alumni where club_id='NSU01' ";      ///////////////// SQL QUERY ////////////////////


      $res=mysqli_query($conn, $sql);

      
      if(isset($_POST['search'])){
        $search_term = $_POST['search_box']; 

        $sql.="alumni_fname ='{$search_term}' ";


}
      
     


      if (!$res)
       {
        die("Query Failed");
      } 




      while ($row=mysqli_fetch_assoc($res)) {

         echo "<tr>";
         echo "<td>".$row['club_id']."</td>";
         echo "<td>".$row['alumni_fname']."</td>";
         echo "<td>".$row['alumni_lname']."</td>";
         echo "<td>".$row['ex_position']."</td>";
         echo "<td>".$row['session']."</td>";
         echo "<td>".$row['alumni_email']."</td>";
         
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