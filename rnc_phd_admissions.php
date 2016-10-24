<?php 	
	include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM phd_admissions ORDER BY s_no desc';
	$retval = mysql_query( $sql, $conn );
	
?>
<link rel="stylesheet" href="style/css/tabs.css" type="text/css">
<div class=table-box>
    <br>
        <h2 id="heading1">RESEARCH & CONSULTANCY</h2>
        <br>
            <div id='cssmenu1'class="dsw">
<ul>
    <li><a href='rnc.php'>Notices</a></li>
    <li><a href='rnc_director.php'>Director</a></li>
    <li><a href='rnc_associate_director.php'>Associate Director</a></li>
   <li><a href='rnc_doctoral_research.php'>Doctoral Research</a></li>
   <li><a href='http://ipu.ac.in/researchcons/listofsupervisor.pdf'>Recognized Supervisor</a></li>
   <li><a href='rnc_contact_drc.php'>Contact DRC</a></li>
   <li class='active'><a href='rnc_phd_admissions.php'>Ph.D Admissions 2015</a></li>
</ul>
</div>
<br><br>
    
            <h1 align="center" ><strong>Ph.D ADMISSIONS </strong></h1>
<table>
    	<thead>
    	<tr>        
        	<th class="table-title">Title/Notices</th>
        	<th class="date1">Uploading Date</th>
    	</tr>
    	</thead>
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
<!-------Footer-------------------->     
<?php include"footer1.php"?>