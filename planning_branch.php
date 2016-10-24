<?php include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM planning_branch ORDER BY s_no desc';
	$retval = mysql_query( $sql, $conn );?>
<div class=table-box>

    <h1 id="heading1">PLANNING BRANCH</h1>
<br>
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
</div>
    <!-- ## Footer ## -->
<?php include"footer1.php"?>