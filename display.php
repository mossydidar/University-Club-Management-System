<?php
   //making connection
   mysql_connect('localhost','root', '');
   //selecting my database
   mysql_select_db('dbms_project');

   $sql ="SELECT * FROM alumni";
  $records = mysql_query($sql);

?>


<html>
<head>
	<title></title>
</head>
<body>
    <table width="600px" border="1" cellpadding="1" cellspacing="1">
       <tr>
       	  <th>Club Id</th>
       	  <th>Alumni fName</th>
       	  <th>Alumni lName</th>
       	  <th>Ex Postion</th>
          <th>Session</th>
          <th>Email</th>

       </tr>

       <?php

         while ($alm=mysql_fetch_assoc($records)) {

         	echo "<tr>";
         	 echo "<td>".$alm['club_id']."</td>";
         	 echo "<td>".$alm['alumni_fname']."</td>";
         	 echo "<td>".$alm['alumni_lname']."</td>";
         	 echo "<td>".$alm['ex_position']."</td>";
         	 echo "<td>".$alm['session']."</td>";
         	 echo "<td>".$alm['alumni_email']."</td>";

         	echo "</tr>";
         	
         } //end while


       ?>

    	
    </table>

</body>
</html>