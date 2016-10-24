<?php 	
	include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM general_administration ORDER BY s_no desc LIMIT 10';
	$retval = mysql_query( $sql, $conn );
	
?>

    	<div class=table-box>
        <br>
        <h2 id="heading1">GENERAL ADMINISTRATION</h2>
		<br>
		<h2 align="center">Officers</h2>
		<br>
		<table>
  <tr>
    <th >Name </th>
    <th style="text-align:right">Contact Details</th>
  </tr>
  <tr>
    <td >Dr. Pankaj Aggarwal <br />
      Dy. Registrar.</td>
    <td style="text-align:right">+91-11 - 25302138, 25302139 
<br />
Email:ga@ipu.ac.in</td>
    </tr>
  
</table>
        <br>
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

        
        
        
        
<?php
	for($i=date('m');$i!=0;$i--)
	{
    		$dateObj   = DateTime::createFromFormat('!m', $i);
?>
        	<tr id="<?php print($dateObj->format('F').date('Y')) ?>"  class="item-collapse">
        	<td colspan="3"><?php print($dateObj->format('F')."     ".date('Y')); ?></td>
		</tr>
<?php
		$sql = "SELECT * FROM general_administration WHERE MONTH(uploading_date) = $i AND YEAR(uploading_date) = ".date('Y')." ORDER BY s_no desc" ;
		$retval = mysql_query( $sql, $conn );
		
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			$newDate = date("d-m-Y", strtotime($row['uploading_date']));
	
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
        for($j=12;$j>0;$j--)
        {
            $dateObj   = DateTime::createFromFormat('!m', $j);
?>
            
<?php
            $sql = "SELECT * FROM general_administration WHERE MONTH(uploading_date) = $j AND YEAR(uploading_date) = ".$year." ORDER BY s_no desc" ;
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
<?php include"footer1.php"
	
?>