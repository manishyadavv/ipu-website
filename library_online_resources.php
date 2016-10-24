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
    <li><a href='library_glance.php'>UIRC: At a Glance</a></li>
    <li><a href='library_resources.php'>UIRC Resources</a></li>
   <li><a href='library_consortium.php'>Consortium Access</a></li>
   <li class='active'><a href='library_online_resources.php'>ONLINE Resources</a></li>
   <li><a href='library_open_access.php'>Open Access Archives</a></li>
   
                </ul></div>

<br>
<h2 id="heading1">Online Resources</h2>
  <table border="1px solid black">
      <tbody>
 <tr >
 
  <td>
  <p><span >  </span><a
  href="http://www.delnet.nic.in/"></a>DELNET</span></a>&nbsp;Networking Knowledge in South
  Asia; <a href="http://164.100.247.17/"><span class=SpellE><span
 >Delnet</span></span><span
 > Online</span></a> (user id:
  <span class=SpellE>ggsipu</span> &amp; password: ipu115) </p>
  <p 
 ><span >  </span>Search 1<span class=GramE>,62,59,492</span>
  books from Union Catalogue of 4614 Member Libraries.</p>
  <p 
 ><span >  </span><a
  href="http://www.ipu.ac.in/urc/ill.htm">Guidelines for UIRC Users for ILL and
  Document Delivery</a></p>
  </td>
 </tr>
 <tr >
 
  <p 
 ><span >  </span><a
  href="http://scholar.google.com/">
Google Scholar</span></a> enables us to search
  specifically for scholarly literature, including peer-reviewed papers, theses,
  books, preprints, abstracts and technical reports from all broad areas of
  research. Use Google Scholar to find articles from a wide variety of academic
  publishers, professional societies, preprint repositories and universities,
  as well as scholarly articles available across web. <!-- Google Scholar --></p>
  </td>
 </tr>
 <tr >

  <td 
  >
  <p 
 ><span >  </span><a
  href="http://indmed.nic.in/">Indian <span class=SpellE>Medlars</span> Centre</span></a> A Centre
  jointly set up by <a href="http://home.nic.in/"><span>NIC</span></a> and <a href="http://icmr.nic.in/"><span
 >ICMR </span></a>to cater to
  the information needs of medical community of India. 38 full text journals
  are indexed in <span class=SpellE>IndMED</span>.<span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
 
  <td 
  >
  <p 
 ><span >  </span><a
  href="http://www.inflibnet.ac.in/"><span class=SpellE><span style='text-decoration:
  none;text-underline:none'>INFormation</span></span><span style='text-decoration:
  none;text-underline:none'> <span class=SpellE>LIBrary</span> <span
  class=SpellE>NETwork</span> INFLIBNET: A Gateway to India's Academic and
  Research&nbsp; Community</span></a></p>
  <p 
 ><b ><span
  >  </span><a href="http://indcat.inflibnet.ac.in/">Union
  Catalogue</a></b> of 1<span class=GramE>,18,10,898</span> books &amp;
  2,20,206 theses from 123 and 238 universities respectively.<span
  ><o:p></o:p></span></p>
  </td>
 </tr>
 <tr >
  
  <td 
  >
  <p 
 ><span >  </span><a
  href="http://www.wipo.int/ipdl/en/">Intellectual Property Digital Library / WIPO</span></a> <span
  class=GramE>provides</span> access to intellectual property data collections
  hosted by the World Intellectual Property Organization. These collections
  include PCT (Patents), <st1:state w:st="on">Madrid</st1:state> (Trademarks),
  Hague (Industrial Designs), Article 6ter (State Emblems, Official Hallmarks,
  and Emblems of Intergovernmental Organizations) etc.</p>
  </td>
 </tr>
 <tr >
  
  <td 
  >
  <p 
 ><span >  </span><a
  href="http://dictionary.reference.com/">Online Dictionary</span></a></p>
  </td>
 </tr>
 <tr>
  
  <td 
  >
  <p 
 ><span >  </span><a
  href="http://www.scirus.com/">SCIRUS</span></a> a scientific search engine from Elsevier. A very
  comprehensive scientific research tool on the web. With over 410 million
  scientific items indexed.</p>
  </td>
 </tr>
 <tr>
  
  <td 
  >
  <p 
 ><span >  </span><a
  href="http://en.wikipedia.org/wiki/Main_Page"><span style='text-decoration:
  none;text-underline:none'>Wikipedia</span></a> the <a
  href="http://en.wikipedia.org/wiki/Free_content"><span style='text-decoration:
  none;text-underline:none'>free content</span></a> encyclopedia, <b
  >49<span class=GramE><span>,32,644</span></span></b> articles in
  English.</p>
  </td>
 </tr>
 <tr >
 
  <td 
  >
  <p 
 ><span >  </span><a
  href="http://en.wikibooks.org/wiki/Main_Page"><span style='text-decoration:
  none;text-underline:none'>Wiki Books</span></a> is a Wikimedia community for
  creating a free library of educational textbooks that anyone can edit. It began
  on July 10, 2003; since then it has grown to include 2,814 books with 52,271
  pages in a multitude of textbooks.</p>
  </td>
 </tr>
      </tbody>
      </table>   



</div>

<?php include"footer1.php"
	
?>