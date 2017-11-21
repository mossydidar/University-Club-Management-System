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



<title>nsu_executive</title>

</head>


<body>
<h2>NSUYES Executive Members</h2>
<!--Search button code-->
     

<table id="tabledesign">
<tr>
    <th>First Name</th>
    <th>Club ID</th>
    <th>Role</th>
    <th>Active Years</th>
    
</tr>

  
   <?php

      $sql="SELECT   member.member_fname, member.club_id, executive.role, executive.session
      from member,executive
      where member.member_id=executive.member_id and member.club_id='NSU02' ";     ///////////////// SQL QUERY ////////////////////

      $res=mysqli_query($conn, $sql);
      if (!$res)
       {
      	die("Query Failed");
      } 

      while ($row=mysqli_fetch_assoc($res)) {

         echo "<tr>";
         
         echo "<td>".$row['member_fname']."</td>";
         
         echo "<td>".$row['club_id']."</td>";
     
         echo "<td>".$row['role']."</td>"; 
         echo "<td>".$row['session']."</td>"; 
         

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