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



<title>du_rover_executive</title>
                                                 <!--TABLE FILTER STARTS HERE-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#tabledesign tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>
                                                       <!--TABLE FILTER ENDS HERE--> 

</head>


<body>
<h2>DHAKA UNIVERSITY ROVER SCOUT GROUP EXECUTIVE MEMBERS </h2>
<input type="text" class="form-control search" placeholder="Search in this table" >
<!--Search button code-->
     

<table id="tabledesign">
<tr>
    
    <th>First Name</th>
    <th>Club ID</th>
    
    <th>Role</th>
    <th>Session</th>
</tr>

  
   <?php

      $sql="SELECT   member.member_fname, member.club_id, executive.role, executive.session
      from member,executive
      where member.club_id=executive.club_id and member.club_id='DU01' ";      ///////////////// SQL QUERY ////////////////////

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