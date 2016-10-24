<?php 	
	include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM statutory_ordinance ORDER BY s_no desc LIMIT 10';
	$retval = mysql_query( $sql, $conn );
	
?>

<link rel="stylesheet" href="style/css/tabs.css" type="text/css">
    	<div class=table-box>
		
        <br>
        <h2 id="heading1">STATUTORY & ORDINANCES</h2>
        <br>
		
		<center><div id='cssmenu1' class="dsw">
<ul>
<!--   <li class='active'><a href='#'>Director</a></li>-->
<li  class='active'><a href='statutory_notices.php'>NOTICES</a></li>
    <li ><a href='so_act.php'>ACT</a></li>
    <li><a href='so_statutes.php'>STATUTES</a></li>
   <li><a href='so_ordinance.php'>ORDINANCES</a></li>
   <li><a href='so_regulation.php'>REGULATIONS</a></li>
   <li><a href='so_statutory_bodies.php'>STATUTORY BODIES</a></li>
</ul>
</div>
</center>
<br>
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
        	
<?php
		$sql = "SELECT * FROM statutory_ordinance WHERE MONTH(uploading_date) = $i AND YEAR(uploading_date) = ".date('Y')." ORDER BY s_no desc" ;
		$retval = mysql_query( $sql, $conn );
		$y=0;
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
		$y=$y+1;
		if($y==1)
		{
?>
			<tr id="<?php print($dateObj->format('F').date('Y')) ?>"  class="item-collapse">
        	<td colspan="3"><?php print($dateObj->format('F')."     ".date('Y')); ?></td>
		</tr>

<?php
}
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
            $sql = "SELECT * FROM statutory_ordinance WHERE MONTH(uploading_date) = $j AND YEAR(uploading_date) = ".$year." ORDER BY s_no desc" ;
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