<?php 	
	include"header.php";
	include"../../credential.conf";
	$sql = 'SELECT * FROM dsw_srijan ORDER BY s_no desc LIMIT 10';
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
   <li><a href='dsw_anugoonj.php'>Anugoonj</a></li>
   <li class='active'><a href='dsw_srijan.php'>Srijan</a></li>
   <li><a href='dsw_contact.php'>Contact DSW</a></li>
   <li><a href='http://ipu.ac.in/studentswelf/ews_120813.pdf'>EWS</a></li>
</ul>
</div>
<br>
<br>
            <h1 align="center" ><strong>Srijan Coordinators</strong></h1>            
            <h3><small>*Click on the title to download the pdf</small></h3>
                <table>
    <tr >
      <th class="table_head" style="width:80%">Core Co-ordination / Executing Committee </th>
      <th class="table_head" style="width:20%">
        <div >School</div></th>
    </tr>
    <tr >
      <td >Dr. (Mrs.) Manpreet Kaur Kang </td>
      <td  >USH&amp;SS</td>
    </tr>
    <tr >
      <td >Dr. Nandula Raghuram </td>
      <td  >USBT</td>
    </tr>
    <tr >
      <td >Dr. (Mrs.) Shruti Aggarwal </td>
      <td  >USB&amp;AS</td>
    </tr>
    <tr >
      <td >Dr. Vivek Sachdeva</td>
      <td  >USH&amp;SS</td>
    </tr>
    <tr >
      <td >Dr. Ashutosh Mohan </td>
      <td  >USH&amp;SS</td>
    </tr>
    <tr >
      <td >Dr. Dhananjay Joshi </td>
      <td  >USE</td>
    </tr>
    <tr >
      <td >Dr. Amit Prakash Singh </td>
      <td  >USIT</td>
    </tr>
    <tr >
      <td >Sh. Anuj Kumar Vaksha</td>
      <td  >USL&amp;LS</td>
    </tr>
    <tr >
      <td >Dr.(Mrs.) Nimisha </td>
      <td  >USBT</td>
    </tr>
  </table>
  <br>
  <table>
    <tr >
      <th class="table_head" style="width:80%">Club Name </th>
      <th class="table_head" style="width:20%">Faculty Co-ordinator</th>
    </tr>
    <tr >
      <td >Photography/Film Club </td>
      <td  ><div >Sh. Vinay Shankar</div></td>
    </tr>
    <tr >
      <td >Literary Club </td>
      <td  ><div >Dr.(Ms.) Shalini Yadava </div></td>
    </tr>
    <tr >
      <td >Dramatics Club </td>
      <td  ><div >Sh. Sayan Chaterjee </div></td>
    </tr>
    <tr >
      <td >Music &amp; Dance Club </td>
      <td  ><div >Dr.(Mrs.)Shruti Aggarwal </div></td>
    </tr>
    <tr >
      <td >Publication/Blogging/Magazine Club </td>
      <td  ><div >Ms. Kulveen Trehan </div></td>
    </tr>
    <tr >
      <td >Fine Arts Club </td>
      <td  ><div >Dr.(Ms.) Deepshikha Agarwal </div></td>
    </tr>
    <tr >
      <td >Science Club </td>
      <td  ><div >Dr. Nandula Raghuram </div></td>
    </tr>
    <tr >
      <td >Nature Club </td>
      <td  ><div >Dr. (Ms.) Rita Singh </div></td>
    </tr>
    <tr >
      <td >Adventure Club </td>
      <td  ><div >Dr. Naresh Vats </div></td>
    </tr>
    <tr >
      <td >Constitutional Club </td>
      <td  ><div >Sh. Anuj Kumar Vaksha</div></td>
    </tr>
  </table>
<h1 align="center" ><strong>Notices</strong></h1>            
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
		$sql = "SELECT * FROM dsw_srijan WHERE MONTH(uploading_date) = $i AND YEAR(uploading_date) = ".date('Y')." ORDER BY s_no desc" ;
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
        for( $j=12;$j>0;$j--)
        {
            $dateObj   = DateTime::createFromFormat('!m', $j);
?>
            
<?php
            $sql = "SELECT * FROM dsw_srijan WHERE MONTH(uploading_date) = $j AND YEAR(uploading_date) = ".$year." ORDER BY s_no desc" ;
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