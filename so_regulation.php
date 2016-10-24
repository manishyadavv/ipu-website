<?php include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM so_regulation ORDER BY s_no desc';
	$retval = mysql_query( $sql, $conn );?>
<!-------------------------------------------------------->
<link rel="stylesheet" href="style/css/tabs.css" type="text/css">
<br>
<h2 id="heading1" align="center">UNIVERSITY REGULATIONS</h2>
<br><center><div id='cssmenu1' class="dsw">
<ul>
<!--   <li><a href='#'>Director</a></li>-->
<li><a href='statutory_notices.php'>NOTICES</a></li>
    <li ><a href='so_act.php'>ACT</a></li>
    <li><a href='so_statutes.php'>STATUTES</a></li>
   <li><a href='so_ordinance.php'>ORDINANCES</a></li>
   <li class='active'><a href='so_regulation.php'>REGULATIONS</a></li>
   <li><a href='so_statutory_bodies.php'>STATUTORY BODIES</a></li>
</ul>
</div>
</center>

<br>
<br>
 <div class=table-box>
   <table>
    	<tr>        
        	<th class="table-title">Title/Notices</th>
        	<th class="date1">Uploading Date</th>
    	</tr>
    	<tbody>
<?php        
        
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		$newDate = date("d-m-Y", strtotime($row['uploading_date']));
?>
    	<tr>
        <td><a href="<?php print $row['links']; ?>"><?php print $row['title']; ?></a></td>         
        <td><?php print $newDate; ?></td>   
    	</tr>
<?php
	}       
?>

    </tbody></table>
    </div>
<?php
    mysql_close($conn);
?>
<?php include"footer1.php"?>