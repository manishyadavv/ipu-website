<?php 	
	include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM personnel_branch ORDER BY s_no desc LIMIT 10';
	$retval = mysql_query( $sql, $conn );
	
?>


    	<div class=table-box>
        <br>
        <h2 id="heading1">PERSONAL BRANCH</h2>
        <br>
		<h2 align="center">Officers</h2>
		<br>
		<table>
  <tr>
    <th >Name </th>
    <th style="text-align:right">Contact Details</th>
  </tr>
  <tr>
    <td >Brig. P.K. Upmanyu<br />
      Joint Registrar</td>
    <td style="text-align:right">+91-11 - 25302182, 25302183, 25302184, 25302188
<br />
Email: personnel@ipu.ac.in</td>
    </tr>
  
</table>
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
        	
<?php
		$sql = "SELECT * FROM personnel_branch WHERE MONTH(uploading_date) = $i AND YEAR(uploading_date) = ".date('Y')." ORDER BY s_no desc" ;
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
            $sql = "SELECT * FROM personnel_branch WHERE MONTH(uploading_date) = $j AND YEAR(uploading_date) = ".$year." ORDER BY s_no desc" ;
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

<table>
      <tr> 
        <TH>&nbsp;</TH>
        <th colspan=4>Leave Application</th>
      </tr>
      <tr>
        <td>&Omicron;</td>
        <td colspan=2><strong>List of holidays - 2015</strong></td>
        <td>&nbsp;</td>
        <td><a href="/establish/holi301214.pdf">PDF</a></td>
      </tr>
      <tr>
        <td>&Omicron;</td>
        <td colspan=2><strong>List of holidays - 2014</strong></td>
        <td>&nbsp;</td>
        <td><a href="/establish/holi311213.pdf">PDF</a></td>
      </tr>
      <tr >
        <td>&Omicron;</td>
        <td colspan=2>Circular regarding Child Care Leave </td>
        <td>---</td>
        <td><a href="/establish/circcl240112.pdf">PDF</a></td>
      </tr>
      <td>&Omicron;</td>
      <td colspan=2>Circular regarding to grant of leave </td>
      <td>-</td>
      <td><a href="delegleave.PDF">PDF</a> </td>
      </tr>
      <tr> 
        <TD rowspan=7>&Omicron;</TD>
        <td rowspan=7><strong><font size=3>Application form for leave </font> 
          </strong></td>
        <td><b><i>Form-1 : </i></b>Application for Leave / for Extension of leave 
          (Earned Leave, Commuted Leave, Half Pay Leave)</td>
        <td><a href="extension.PDF"> PDF </a></td>
        <td><a href="extension.DOC"> DOC </a></td>
      </tr>
      <tr> 
        <td><b><i>Form-2 : </i></b>Application for Grant of Special Casual Leave</td>
        <td><a href="specialleave.PDF">PDF</a></td>
        <td><a href="specialleave.DOC">DOC</a></td>
      </tr>
      <tr> 
        <td><b><i>Form-3 : </i></b>Application for Maternity / Paternity Leave</td>
        <td><a href="maternity.PDF">PDF</a></td>
        <td><a href="maternity.DOC">DOC</a></td>
      </tr>
      <tr> 
        <td><b><i>Form-4 : </i></b>Application for Leave / for Extension of leave 
          (E.O.L./ Study Leave/ Subbatical Leave/ Leave Not Due)</td>
        <td><a href="studyleave.PDF">PDF</a></td>
        <td><a href="studyleave.DOC">DOC</a></td>
      </tr>
      <tr> 
        <td><b><i>Form-5 : </i></b>Joining Report after Availing Leave</td>
        <td><a href="estforms/frmjoing240512.pdf">PDF</a></td>
        <td>-</td>
      </tr>
      <tr> 
        <td><b><i>Form-6 : </i></b>Application for Casual Leave</td>
        <td><a href="casualleave.PDF">PDF</a></td>
        <td><a href="casualleave.DOC">DOC</a></td>
      </tr>
      <tr> 
        <td><strong>Form: </strong>Child Care Leave </td>
        <td><a href="estforms/cclform.pdf">PDF</a></td>
        <td><a href="estforms/cclform.doc">DOC</a></td>
      </tr>
      <tr>        <td align=center>&Omicron;</td>
        <td colspan=2>Standard operational procedure to be followed for submitting 
          applications for grant of Leave </td>
        <td><a href="sop.PDF">PDF</a></td>
        <td><a href="sop.DOC">DOC</a></td>
      </tr>
      <tr>        <td align=center>&Omicron;</td>
        <td colspan=2>Delegation of Powers in Regard to Grant of Leave </td>
        <td> <a href="delegate.PDF">PDF</a></td>
        <td><a href="delegate.DOC">DOC</a></td>
      </tr>
      <tr>        <td align=center>&Omicron;</td>
        <td colspan="2"><strong>Various Forms (University Personnel Branch) </strong></td>
        <td>-</td>

        <td><a href="estforms/establish_forms.htm">HTM</a></td>
      </tr>
    </table>
	</div>
<?php include"footer1.php"
	
?>