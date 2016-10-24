<?php include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM academic_affairs ORDER BY s_no desc';
	$retval = mysql_query( $sql, $conn );?>
  <h2 id="heading1" align="center"><br>ACADEMIC AFFAIRS</h2>


<div class=table-box>
  <h3><small>*Click on the title to download the pdf</small></h3>
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