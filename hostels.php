<?php include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM hostels ORDER BY s_no desc LIMIT 10';
	$retval = mysql_query( $sql, $conn );?>
<!-------------------------------------------------------->
<br>
<h2  align="center">HOSTEL FACILITIES</h2>

 <div class=table-box>
     <table>
  <tr >
    <th  class="table_head" style="width:40%">Hostel Name </th>
    <th  class="table_head" style="width:30%">
      Name & Designation</th>
    <th  class="table_head" style="width:30%">Contact </th>
  </tr>
   
    <tr><td>Hostels</td>
    <td ><div >
     Prof. P.C. Sharma<br />
		    Chief Warden    </div></td>
    <td >+91-11-25302301</td></tr><tr>
<td>Boys Hostel-I: Shivalik</td>
<td ><div >Sh. Rakesh Kumar,<br /> 
  Warden</div></td>
<td >+91-11-25302932<br>wardenshivalik@ipu.ac.in</td></tr><tr>
  <td>Boys Hostel-II: Aravali</td>
  <td ><div >Sh. Anuj Kr. Vaksha </div></td>
  <td >+91-11-25302940<br>wardenaravali@ipu.ac.in</td></tr>
<tr>
  
  <td> Girls Hostel-I: Satpura </td>
  <td ><div >Dr. Shalini Yadava,<br />
    Warden</div></td>
  <td >+91-11-25302911,+91-11-25302912<br>satpura@ipu.ac.in</td>
</tr>
<tr>
    <td> Girls Hostel-II: Nilgiri</td>
    <td ><div >Mrs. Gayatri Sahu,<br /> 
      Warden</div></td>
    <td >+91-11-25302906<br>wardennilgiri@ipu.ac.in</td></tr>
</table>
<h3 style="text-align:center"><b>Admission in Hostel, Session 2015-16</b></h3>
     <br>
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
		$newDate1 = date("d-m-Y", strtotime($row['last_date']));
?>
    	<tr>
        <td><a href="<?php print $row['links']; ?>"><?php print $row['title']; ?></a></td>         
        <td><?php print $newDate; ?></td>   
    	</tr>
<?php
	}       
?>

        
        
        
        
<?php
	for($i=date('m');$i!=0;$i--)
	{
    		$dateObj   = DateTime::createFromFormat('!m', $i);
?>
        	<tr id="<?php print($dateObj->format('F').date('Y')) ?>"  class="item-collapse">
        	<td colspan="3"><?php print($dateObj->format('F')."     ".date('Y')); ?></td>
		</tr>
<?php
		$sql = "SELECT * FROM hostels WHERE MONTH(uploading_date) = $i AND YEAR(uploading_date) = ".date('Y')." ORDER BY s_no desc" ;
		$retval = mysql_query( $sql, $conn );
		
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			$newDate = date("d-m-Y", strtotime($row['uploading_date']));
			$newDate1 = date("d-m-Y", strtotime($row['last_date']));
?>
			<tr class="<?php print($dateObj->format('F').date('Y')) ?>" style="display:none">  
	        	<td><a href="<?php print $row['links']; ?>"><?php print $row['title']; ?></a></td>         
	        	<td><?php print $newDate; ?></td>    
		    	</tr>

<?php
		}
?>

    
<?php
    
	}
    $year=date('Y');
    for($i=0;$i<2;$i++)
    {
        
        $year=$year-1;
?>
        <tr id="<?php print("year".$year) ?>"  class="year-collapse">
        <td  style="text-align:center" colspan="3"><?php print($year); ?></td>
        </tr>
<?php
        for( $j=12;$j>0;$j--)
        {
            $dateObj   = DateTime::createFromFormat('!m', $j);
?>
            
<?php
            $sql = "SELECT * FROM hostels WHERE MONTH(uploading_date) = $j AND YEAR(uploading_date) = ".$year." ORDER BY s_no desc" ;
            $retval = mysql_query( $sql, $conn );
    
?>
		
<?php
		$y=0;
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
		$y=$y+1;
		if($y==1)
		{
?>
			<tr id="<?php print($dateObj->format('F').$year) ?>"  class="<?php print("year".$year) ?>" style="display:none">
        		<td class="item-collapse" colspan="3"><?php print($dateObj->format('F')."     ".$year); ?></td>
            		</tr>
		
<?php
		}
		
                
                $newDate = date("d-m-Y", strtotime($row['uploading_date']));
                $newDate1 = date("d-m-Y", strtotime($row['last_date']));
?>
                <tr class="<?php print($dateObj->format('F').$year) ?>" style="display:none">  
                <td><a href="<?php print $row['links']; ?>"><?php print $row['title']; ?></a></td>         
	        	<td><?php print $newDate; ?></td>    
		    	</tr>
<?php
		      }
?>

<?php
        }
    }
	
?>
    </tbody></table>
    </div>
<?php
    mysql_close($conn);
?>
<?php include"footer1.php"?>
