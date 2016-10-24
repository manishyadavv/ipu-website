<?php 	
	include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM dsw_anugoonj ORDER BY s_no desc';
	$retval = mysql_query( $sql, $conn );
	
?>
<link rel="stylesheet" href="style/css/tabs.css" type="text/css">
    	<div class=table-box>
        <br>
        <h2 id="heading1">DIRECTORATE  OF STUDENT'S WELFARE</h2>
        <br>
            <div id='cssmenu1'  class="dsw">
<ul>
<!--   <li><a href='#'>Director</a></li>-->
    <li><a href='dsw.php'>Notices</a></li>
    <li><a href='dsw_director.php'>Director</a></li>
   <li><a href='dsw_associate_director.php'>Associate Director</a></li>
    <li><a href='dsw_sports.php'>Sports</a></li>
   <li><a href='dsw_student.php'>Students' Council</a></li>
   <li class='active'><a href='dsw_anugoonj.php'>Anugoonj</a></li>
   <li><a href='dsw_srijan.php'>Srijan</a></li>
   <li><a href='dsw_contact.php'>Contact DSW</a></li>
   <li><a href='http://ipu.ac.in/studentswelf/ews_120813.pdf'>EWS</a></li>
</ul>
</div>
<br>
<br>      
            <h1 align="center" ><strong><a href="http://anugoonj2013.blogspot.in/">Anugoonj</a></strong></h1>
            <h3><small>*Click on the title to download the pdf</small></h3>
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
<?php include"footer1.php"
	
?>