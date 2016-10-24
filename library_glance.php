<?php 	
	include"header.php";
	include"../credential.conf";
	$sql = 'SELECT * FROM student_welfare ORDER BY s_no desc LIMIT 10';
	$retval = mysql_query( $sql, $conn );
	
?>
<style>
    table a{color:black !important; font-weight:bold !important;}</style>
<link rel="stylesheet" href="style/css/tabs.css" type="text/css">
        <br>
 <div class=table-box>
        <h2 id="heading1">LIBRARY</h2>
        <br>
            <div id='cssmenu1'class="dsw">
<ul><li><a href='library.php'>Library</a></li>
    <li class='active'><a href='library_glance.php'>UIRC: At a Glance</a></li>
    <li><a href='library_resources.php'>UIRC Resources</a></li>
   <li><a href='library_consortium.php'>Consortium Access</a></li>
   <li><a href='library_online_resources.php'>ONLINE Resources</a></li>
   <li><a href='library_open_access.php'>Open Access Archives</a></li>
   
                </ul></div>

<br>

   <table>
 <th><center> UIRC: At a Glance</center></th>
 
  <tr>
  <td>
  <a href="http://ipu.ac.in/ical2013/index.htm" target="_blank"><span>2<sup>nd</sup> ICAL-2013 </span></a>
  </td>
 </tr>
  <tr>
  <td>
  <a href="http://ipu.ac.in/urc/urcstaff.htm" target="_blank">UIRC Team</a>
  </td>
 </tr>
  <tr>
  <td>
  <a href="http://ipu.ac.in/urc/rules.htm" target="_blank">Membership Rules</a>
  </td>
 </tr>
  <tr>
  <td>
  Download Membership Form :
  <a href="http://www.ipu.ac.in/urc/memform.pdf" target="_blank">Employees ,</a>
   <a href="http://www.ipu.ac.in/urc/libstdfrm201114.pdf" target="_blank">Students</a>
  </td>
 </tr>
  <tr>
  <td>
  <a href="http://www.ipu.ac.in/urc/ill.htm" target="_blank">Download DELNET forms</a>
  <a href="http://www.ipu.ac.in/urc/annex2.htm" target="_blank">Article Request Form</a>
  <a href="http://www.ipu.ac.in/urc/annex1.htm" target="_blank">Book on Loan Form</a>
  </td>
 </tr>

</table>



</div>

<?php include"footer1.php"
	
?>