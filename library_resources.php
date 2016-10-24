<?php 	
	include"header.php";
	include"../credential.conf";
	$sql = 'SELECT * FROM student_welfare ORDER BY s_no desc LIMIT 10';
	$retval = mysql_query( $sql, $conn );
	
?>
<style>
    table a{color:black !important; font-weight:bold !important;}</style>
<link rel="stylesheet" href="style/css/tabs.css" type="text/css">
    	<div class=table-box>
        <br>
        <h2 id="heading1">LIBRARY</h2>
        <br>
            <div id='cssmenu1'class="dsw">
<ul><li><a href='library.php'>Library</a></li>
    <li><a href='library_glance.php'>UIRC: At a Glance</a></li>
    <li class="active"><a href='library_resources.php'>UIRC Resources</a></li>
   <li><a href='library_consortium.php'>Consortium Access</a></li>
   <li><a href='library_online_resources.php'>ONLINE Resources</a></li>
   <li><a href='library_open_access.php'>Open Access Archives</a></li>
   
                </ul></div>
<br>
<br>
   <table border="1px solid black">
 <tr >
  
  <td>
  <p><span>  </span><a
  href="http://portal.acm.org/dl.cfm?coll=Portal&amp;dl=ACM&amp;CFID=9168648&amp;CFTOKEN=50403753"><b
  ><span 
  >ACM</span></b><span > Digital Library</span></a> (32 Journals)</p>
  </td>
 </tr>
 <tr >
  
 <td>
  
  <p 
  ><span >  </span>Biotechnology Abstracts 1982
  – 2011 (30 years) <span color:#FF6600>(Access from Periodical Section
  only)</span></p>
  </td>
 </tr>
 
  <td>
  <p ><span >  </span>Bureau of Indian Standard
  Full Text Database </p>
  <p 
  ><span >  </span>Complete Set (37 years) 1972
  – 2008 <span>(Access from Periodical Section only)</span></p>
  </td>
 </tr>
 <tr >
 
 <td>
  
  <p 
  ><span >  </span><a
  href="http://www.ipu.ac.in/urc/ebook.htm"><span 
  >E-books</span></a> <span 
  >on university intranet via anonymous ftp </span><b
  ><a
  href="http://www.digitalbookindex.org/about.htm"
  title="Provides links to more than 1,65,000 full-text digital books from more than 1800 publishers, universities and private sites. More than 1,40,000 of these books and documents are available free."><span
  >Digital Book Index</span></a>
  </b><a href="http://www.doabooks.org/"><span 
  >DOAB: </span><span 
  >Directory of Open Access
  Books</span></a><span ></span></p>
  </td>
 </tr>
 <tr>
  <td>
  <p 
  ><b ><span
  >  </span><a href="http://search.ebscohost.com/"><span
  >EBSCO databases</span></a> </b>comprising
  of following five databases:</p>
  <p 
  ><b ><span 
  > 
  </span>Business Source Complete</span></b><span 
  > (BSC), provides collection of
  bibliographic and full text content, offers indexing and abstracting of<span
  >     </span>searchable cited references for more
  than 1,300 journals dating back 1886 - 2015.</span></p>
  <p 
  ><b ><span 
  > 
  </span>Communication &amp; Mass Media Complete</span></b><span
  > (CMMC), provides
  cover-to-cover indexing and abstracting for more than 570 journals,<span
  >   </span>and selected coverage of 200 journals, for
  a combined coverage of more than 770 titles and includes full text for over
  450<span >   </span>journals.<b > EBSCO</b> also provide access to: </span></p>
  <p 
  ><b ><span 
  >  </span>-
  Library, Information Science &amp; Technology Abstracts (LISTA)</span></b></p>
  <p 
  ><b ><span 
  >  </span>- <span
  >GreenFILE</span></span></b></p>
  <p 
  ><b ><span 
  >  </span>-
  Teacher Reference Center etc.</span></b><i><span><span></span></i></p>
  </td>
 </tr>
 <tr>
  
 <td>
  
  <p 
  ><span >  </span><a
  href="http://emeraldinsight.com/" target="_blank"><b><span >Emerald</span></b><span
  > Management </span></a><span>175 Journals from
  Management Studies and Library, Information &amp; Knowledge Management)</span></p>
  </td>
 </tr>
 <tr >
  
 <td>
  
  <p 
  ><span class=MsoHyperlink><b ><span
  ><span
  >  </span><a href="http://heinonline.org/HOL/Welcome"><span
  >Hein Online</span></a> </span></b></span></p>
  </td>
 </tr>
 <tr >
  
  <td 
  
  <p 
  ><b><span >  </span><a
  href="http://www.ipu.ac.in/urc/listofprintJournals2015.htm"
  title="343 Print Journals &amp; 8 Magzines - 2015"><span >Journals &amp; Magazines</span></a> (Print)</b><b
  ><span> NEW </span></b><span
  ><b>Print + E-Journals</b> = <b ><a
  href="http://www.ipu.ac.in/urc/14004Ejls.htm">14004+</a></b>)</span> <b><a
  href="http://www.ipu.ac.in/urc/ListofFOAP.htm"
  title="120 FOAP Journals and their weblinks for 2015"><span>List of FOAP Journals</span></a></b></p>
  </td>
 </tr>
 <tr >
  
 <td>
  
  <p 
  ><span >  </span><a
  href="http://link.springer.com/search?facet-content-type=%22Book%22&amp;facet-series=%22558%22&amp;showAll=false"><span
  >Lecture Notes in Computer
  Science - <b >LNCS</b> by Springer</span></a>
  <b ><span>(E-books
  series)</span></b><span > </span></p>
  <p 
  ><span ><span
  >  </span>7924 approx. online books during 1997 -
  2015 = 18 years, accessible since 01 April 2009.</span></p>
  </td>
 </tr>
 <tr >
  
  <td 
  
  <p 
  ><b ><span
  >  </span><a
  href="http://www.lexisnexis.com/us/lnacademic/"><span>Lexis-Nexis</span></a></b> (740 Journals)</p>
  </td>
 </tr>
 <tr >
  
 <td>
  
  <p 
  ><b ><span
  >  </span>List of Books Added in UIRC Collection</b></p>
  <p 
  ><b ><span 
  ><span >  </span><a
  href="http://www.ipu.ac.in/urc/laarchiveCalYear.htm"><span >Archive <span class=SpellE>Calender</span> Year
  (2005-2015)</span><span >*</span><span > </span></a></span></b></p>
  <p 
  ><b ><span 
  ><span >  </span><a
  href="http://www.ipu.ac.in/urc/laarchiveFinYear.htm"><span >Archive Fin. Year (2005-06 to 2015-16)</span></a><span
 >*</span></span></b></p>
  <p 
  ><span ><span > 
  </span>*</span><span>With Consolidated List</span><span></span></p>
  <p ><span class=MsoHyperlink><span>§</span></span><span
  class=MsoHyperlink><span class=MsoHyperlink><span 
  ><a href="http://ipu.ac.in/urc/loa%202014-15_395.pdf"
  title="List of Book Additions (01 April 2014 - 31 March 2015)"><span
  >List of Book Additions (01
  April 2014 - 31 March 2015)</span></a><span > 
  </span></span></span><b ><span>NEW </span></b></p>
  <p 
  ><span class=MsoHyperlink><span
  >§</span></span><span
  class=MsoHyperlink></span><span class=MsoHyperlink><span 
  ><a href="http://ipu.ac.in/urc/loa2015-16_03.pdf"
  title="List of Book Additions (01 April 2015 - 31 July 2015)"><span
  >List of Book Additions (01
  April 2015 - 31 July 2015)</span></a><span >     
  </span></span></span><b ><span>NEW </span></b></p>
  </td>
 </tr>
 <tr >
  
  <td 
  
  <p 
  ><b ><span
  >  </span><a
  href="http://www.manupatrafast.in/pers/Personalized.aspx"><span class=SpellE><span
  >Manupatra</span></span></a></b>
  Click on <i><span
  </td>
 </tr>
 <tr >
  
 <td>
  
  <p 
  ><b><span >  </span><a
  href="http://10.102.97.5/opac/verif.aspx"
  title="For password request, send mail to apsingh95@yahoo.com with your UIRC Membership Id e.g. BT12-01 or 30xyz"><span
  >Member Issue Status</span><span> </span><span >(Please
  use UIRC Member Id and PW)</span></a> </b><span class=MsoHyperlink><span
  ><a href="http://10.102.97.5/opac/verif.aspx"><b
  ><span 
  >Click here</span></b><span 
  > from <span class=SpellE>Dwarka</span> Campus LAN</span></a></span></span><b><span
  ></span></b></p>
  </td>
 </tr>
 <tr>
  
 <td>
  
  <p 
  ><span >  </span><a
  href="http://www.ipu.ac.in/urc/nature.htm"
  title="Click to access 05 NPG Journals"><span 
  >Nature Journals</span></a><b></b></p>
  </td>
 </tr>
 <tr>
  
 <td>
  
  <p 
  ><span class=MsoHyperlink><span><span >  </span><a
  href="http://14.139.60.216:8080/"><span 
  >Off Campus Access Server</span></a></span></span><b></b></p>
  </td>
 </tr>
 <tr >
  
  <td 
  
  <p 
  ><span><span
  >  </span>Online Public Access Catalog</span> <b
  ><a
  href="http://10.102.97.5/opac/Catalogue.aspx"
  title="WEB OPAC - from Dwarka Campus ONLY">WEB <span class=SpellE>OPAC</span></a></b><span
  class=SpellE><span >Troodon</span></span><span> 5.0 <a
  href="http://10.102.97.5/opac/Catalogue.aspx"><b><span >Click here</span></b><span > from <span class=SpellE>Dwarka</span> Campus LAN</span></a></span><span
  class=MsoHyperlink><span></span></span></p>
  <p 
  ><span><span >  </span><a
  href="http://10.102.97.5/opac/Catalogue.aspx"
  title="53622 books in UIRC, 2677 in USAP and 1914 books in Law Library collection">58213
  + books</a>, 6562 Bound Journals, 759 Dissertations, 2657 CD-ROM, 84 Video
  Cassettes, 170 Floppy Diskettes etc</span><span >.</span><b ><span ></span></b></p>
  <p 
  ><span class=MsoHyperlink></span></p>
  <p 
  ><span >  </span><a
  href="http://164.100.247.24/cgi/nph-bwcgi/BASIS/union/cat/main/SF"><span
  >WEB OPAC through DELNET
  Union Catalogue</span></a> (Please enter LOCATION CODE as <span class=SpellE><span>ggsipu</span></span>)</p>
  <p 
  ><span >  </span><a
  href="http://indcat.inflibnet.ac.in/Uni_search_b.jsp?No=108_s"><span
  >WEB OPAC through INFLIBNET <span
  class=SpellE><b >IndCat</b></span> Union
  Catalogue</span><span > (since 17 Nov. 2009)</span></a></p>
  </td>
 </tr>
 <tr >
  
 <td>
  
  <p 
  ><span >  </span><a
  href="http://www.ipu.ac.in/urc/listofjournals.xls"><span>Subject / School Wise List of Subscribed Journals</span></a>
  <b ><span >NEW </span></b></p>
  </td>
 </tr>
 <tr >
    <td 
  
  <p 
  ><span >  </span><a
  href="https://scifinder.cas.org/scifinder"><span class=SpellE><b
  ><span 
  >SciFinder</span></b></span><b ><span > </span></b><span
  >Scholar</span></a> <b
  ><span >Online Chemical Abstracts 1908- 2015</span></b> <span
  >Web Interface</span> <b ><span
  >NEW</span></b></p>
  </td>
 </tr>
 <tr >
 <td>
  
  <p 
  ><span><span
  >  </span><a
  href="http://online.sagepub.com/browsejournals.dtl?coll=available&amp;journaltitle=Browse+by+Journal+Title"><b><span
  >SAGE</span></b><span
  > Communication &amp; Media
  Studies</span></a> (<b>36 Journals</b> with15 years back files)</span><span
  >
  <a href="http://ipu.ac.in/urc/sage36.htm">List <span 
  >&amp;</span> Link Here</a></span><span></span></p>
  </td>
 </tr>
 <tr >
  
 <td>
  
  <p 
  ><span class=MsoHyperlink><b ><span
  ><span
  >  </span><a
  href="http://login.westlawindia.com/maf/wlin/ext/app/tocectory?stnew=true&amp;sttype=stdtemplate&amp;sp=inggsiuip-1"><span
  >West Law India</span></a> </span></b></span><b></b></p>
  </td>
 </tr>
</table>

</div>

<?php include"footer1.php"
	
?>