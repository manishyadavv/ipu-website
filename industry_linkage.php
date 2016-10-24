<?php include"header.php";
include"../../credential.conf";
	$sql = 'SELECT * FROM industry_linkage ORDER BY s_no desc';
	$retval = mysql_query( $sql, $conn );?>
<!-------------------------------------------------------->
<br>
<h2 id="heading1" align="center">INDUSTRY LINKAGES AND PLACEMENT</h2>
<p align="center"><strong><u><a href="http://ipu.ac.in/uiiell/iuiicindinst050314.pdf">Invitation to Industry / Institution</a></u></strong></p>

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
<?php include"footer1.php"?>