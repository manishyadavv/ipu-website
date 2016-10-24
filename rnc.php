<?php include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM rnc_notices ORDER BY s_no desc LIMIT 10';
	$retval = mysql_query( $sql, $conn );?>
<link rel="stylesheet" href="style/css/tabs.css" type="text/css">
<div class=table-box>
    <br>
        <h2 id="heading1">RESEARCH & CONSULTANCY</h2>
        <br>
            <div id='cssmenu1'class="dsw">
<ul>
    <li class='active'><a href='rnc.php'>Notices</a></li>
    <li ><a href='rnc_director.php'>Director</a></li>
    <li><a href='rnc_associate_director.php'>Associate Director</a></li>
   <li><a href='rnc_doctoral_research.php'>Doctoral Research</a></li>
   <li><a href='rnc_recognized_supervisor.php'>Recognized Supervisor</a></li>
   <li><a href='rnc_contact_drc.php'>Contact DRC</a></li>
   <li><a href='rnc_phd_admissions.php'>Ph.D Admissions 2015</a></li>
</ul>
</div>
<br><br>
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
		$sql = "SELECT * FROM rnc_notices WHERE MONTH(uploading_date) = $i AND YEAR(uploading_date) = ".date('Y')." ORDER BY s_no desc" ;
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
            $sql = "SELECT * FROM rnc_notices WHERE MONTH(uploading_date) = $j AND YEAR(uploading_date) = ".$year." ORDER BY s_no desc" ;
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
<!-------Footer-------------------->     
<?php include"footer1.php"?>