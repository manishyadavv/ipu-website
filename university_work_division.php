<?php 	
	include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM university_work_division ORDER BY s_no desc LIMIT 10';
	$retval = mysql_query( $sql, $conn );
	
?>


    	<div class=table-box>
        <br>
        <h2 id="heading1">UNIVERSITY WORK DIVISION</h2>
        <br>
		<h2 align="center">Officers</h2>
		<br>
		<table>
  <tr>
    <th >Name </th>
    <th style="text-align:right">Contact Details</th>
  </tr>
  <tr>
    <td >Sh. V. P. Shrivastav<br />
      Superintending Engineer</td>
    <td style="text-align:right">+91-11 - 25302288, 25302289<br />
Fax: +91-11-25302290<br />
Email: Se.uwd@ipu.ac.in</td>
    </tr>
  
</table>
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
		$sql = "SELECT * FROM university_work_division WHERE MONTH(uploading_date) = $i AND YEAR(uploading_date) = ".date('Y')." ORDER BY s_no desc" ;
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
            $sql = "SELECT * FROM university_work_division WHERE MONTH(uploading_date) = $j AND YEAR(uploading_date) = ".$year." ORDER BY s_no desc" ;
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
<?php
    mysql_close($conn);
?>
<h2>Members of Building and Works Committee to be included in the list: </h2>
<table id="bordered">
  <tr>
    <th width="67" >S.No. </th>
    <th width="348" >Name and Address  
    </th>
  </tr>
  <tr>
    <td width="67" >1. </td>
    <td width="348" >Vice Chancellor,<br>
      Guru Gobind Singh Indraprastha University <br>
      
    </td>
  </tr>
  <tr>
    <td width="67" >2. </td>
    <td width="348" >Secretary (Higher Education), <br>
      Room No.502, A Wing, 5 th Floor, <br>
      Delhi Secretariat, IP Estate <br>
      New Delhi-110002. 
    </td>
  </tr>
  <tr>
    <td >3. </td>
    <td >Chief Engineer Maintenance Zone-III, <br>
      PWD, IP Estate, New Delhi-110002 
    </td>
  </tr>
  <tr>
    <td >4. </td>
    <td >Chief Engineer (I&amp;F), GNCTD <br>
      ISBT, Building, Kashmere Gate <br>
      Delhi – 110006. 
    </td>
  </tr>
  <tr>
    <td >5. </td>
    <td >Chief Engineer (HQ), DDA <br>
      INA, Vikas Sadan <br>
      New Delhi . 
    </td>
  </tr>
  <tr>
    <td >6. </td>
    <td >Chief Engineer <br>
      GGSIP University <br>
      
    </td>
  </tr>
  <tr>
    <td >7. </td>
    <td >Controller of Finance <br>
      GGSIP University <br>
      
    </td>
  </tr>
  <tr>
    <td >8. </td>
    <td >Registrar <br>
      GGSIP University <br>
      
    </td>
  </tr>
  <tr>
    <td >9. </td>
    <td >Director (Student Welfare) <br>
      GGSIP University <br>
      
    </td>
  </tr>
</table>
<br>
<h2> Details of New Campus Projects:</h2>
<table id="bordered">
  <tr>
    <th  >Project Name </th>
    
    <th  >Construction and Development of Phase-I of West Campus of Guru Gobind Singh Indraprastha University at Sector 16-C, Dwarka, Delhi 
    </th>
  </tr>
  <tr>
    <td  >Land </td>
    
    <td  >60.436 acres 
    </td>
  </tr>
  <tr>
    <td  >Facilities being developed in Phase-I 
         </td>
    
    <td  >a) Administrative Block <br>
      b) Computer Centre <br>
      c) University Schools of Studies - 5 Nos. (1800 Students) <br>
      d) Library <br>
      e) Hostels – 4 Nos. (2 Boys, 2 Girls) (200 Students) <br>
      f) Staff Quarters <br>
      g) Ancillary Buildings (Convenient Shopping Centre, Community Hall, Cafeteria, Health Centre, Electric Sub Station) <br>
      h) Play fields, swimming pool, etc. 
    </td>
  </tr>
  <tr>
    <td  >School of Studies in Phase-I </td>
    
    <td  ><ol>
        <li>University School of Chemical Technology </li>
        <li>University School of Bio Technology </li>
        <li>University School of Management Studies </li>
        <li>University School of Environment Management </li>
        <li>University School of Basic &amp; Applied Sciences </li>
        <li>University School of Humanities &amp; Social Sciences </li>
        <li>University School of Law and Legal Studies </li>
        <li>University School of Information Technology  </li>
      </ol>
    </td>
  </tr>
  <tr>
    <td width="643" colspan="3" >Sanction of Rs.131.73 crores accorded by GNCTD 
    </td>
  </tr>
  <tr>
    <td width="643" colspan="3" >Work in Progress 
    </td>
  </tr>
</table>

<table id="bordered">
  <tr>
    <th  >Project Name </th>
    
    <th  >Construction and Development of Phase-I of East Campus of Guru Gobind Singh Indraprastha University at Surajmal Vihar, Delhi  
    </th>
  </tr>
  <tr>
    <td  >Land </td>
    
    <td  >18.75 acres 
    </td>
  </tr>
  <tr>
    <td  >Facilities being developed in Phase-I 
    </td>
    
    <td  >a) Academic Block I including Administration, Computer Centre, Labs, Faculty Rooms 
        b) Library Block including Seminar, Conference Room, Labs, Lecture Theatre 500 capacity, Cafeteria 
        c) Hostels for 175 students (100 boys, 75 girls) 
        d) Ancillary buildings (Electric Sub Station) 
        e) Play fields 
    </td>
  </tr>
  <tr>
    <td  >Teaching Department in Phase-I </td>
    
    <td  >Indian Institute of Information Technology 
    </td>
  </tr>
  <tr>
    <td width="643" colspan="3" >Sanction of Rs.64.88 crores accorded by GNCTD 
    </td>
  </tr>
  <tr>
    <td width="643" colspan="3" >Pre Construction activities in Progress. 
    </td>
  </tr>
</table>
</div>


<?php include"footer1.php"
	
?>