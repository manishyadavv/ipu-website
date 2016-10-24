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
   <li><a href='library_online_resources.php'>ONLINE Resources</a></li>
   <li class='active'><a href='library_open_access.php'>Open Access Archives</a></li>
   
                </ul></div>

  <h2 id="heading1">Library Open Access</h2>
     <div class="table-box">
    <table  style="border:1px solid black;">
 <tr >
  
  <td 
  >
  <p 
 ><span >  </span><a
  href="http://www.eprints.org/"><span 
  >EPrints.org</span></a> dedicated to opening access to the <b>refereed</b>
  research literature online through author / institution self-archiving.</p>
  </td>
 </tr>
 <tr >
  
  <td 
   >
  <p 
 ><span >  </span><ahref="http://www.jisc.ac.uk/"><span>JISC</span></a> Joint Information Systems Committee supports further
  and higher education by providing strategic guidance, advice and
  opportunities to use Information and Communications Technology to support
  teaching, learning, research and administration. JISC is funded by all the <st1:place
  w:st="on"><st1:country-region w:st="on">UK</st1:country-region></st1:place>
  post-16 and higher education funding councils.</p>
  </td>
 </tr>
 <tr >
 
  <td 
 >
  <p 
 ><span >  </span><ahref="http://mathworld.wolfram.com/"><span class=SpellE><span>MathSearch</span></span></a>
  from <span class=SpellE>WolframMathWorld</span> to search free resource built
  with <span class=SpellE>Mathematica</span> Technology.</p>
  </td>
 </tr>
 <tr>
  
  <td>
  <p 
 ><span >  </span><a
  href="http://www.ndltd.org/"><span>Networked Digital Library of Theses and Dissertations</span></a> is an
  international organization dedicated to promoting the adoption, creation,
  use, dissemination and preservation of electronic analogues to the
  traditional paper-based theses and dissertations. Collection = 15<span
  class=GramE>,20,858</span> records.<span ></span></p>
  </td>
 </tr>
 <tr >
 
  <td 
   >
  <p 
 ><b><span >  </span><a
  href="http://www.oclc.org/oaister/"><span class=SpellE><span>OAIster</span></span></a>:</b>
  <b >3<span class=GramE>,00,00,000</span> +</b>
  digital resources from 1100 contributors are now provided by OCLC.<span
  >       </span><i ><span
  ><a
  href="http://www.oclc.org/support/documentation/firstsearch/databases/dbdetails/details/OAIster.htm"><span>Database Info</span></a></span></i><span
  ></span></p>
  </td>
 </tr>
 <tr >
 
  <td>
  <p 
 ><span >  </span><a
  href="http://www.openarchives.org/"><span></span> lops and promotes interoperability standards that aim to
  facilitate the efficient dissemination of content. The Open Archives
  Initiative has its roots in an effort to enhance access to e-print archives
  as a means of increasing the availability of scholarly communication.</p>
  </td>
 </tr>
 <tr >
  
  <td 
   >
  <p 
 ><span >  </span><a
  href="http://www.sherpa.ac.uk/romeo.php?all=yes"><span >Open journal publishers</span></a> SHERPA project
  is investigating issues surrounding the development and use of open access
  E-print repositories. <span class=SpellE>RoMEO</span> Project (Rights <span
  class=SpellE>MEtadata</span> for Open archiving)&nbsp;is funded by the <a
  href="http://www.jisc.ac.uk/" target=new><span 2002 - 31 July 2003) to investigate the rights issues
  surrounding the 'self-archiving' of research in the UK academic community
  under the <a href="http://www.openarchives.org/" target=new><span></span></a>
  <a href="http://www.openarchives.org/OAI/openarchivesprotocol.html"target=new><span >Protocol
  for Metadata Harvesting</span></a>.</p>
  </td>
 </tr>
 <tr >
  
  <td>
  <p 
 ><span >  </span><a
  href="http://openmed.nic.in/"><span class=SpellE><span >OpenMED@NIC</span></span></a> is a discipline based
  International Archive. It accepts both published and unpublished documents having
  relevance to research in Medical and Allied Sciences including Bio-Medical,
  Medical Informatics, Dental, Nursing and Pharmaceutical Sciences. These could
  be preprints (pre-refereed journal paper), <span class=SpellE>postprints</span>
  (refereed journal paper), conference papers, conference posters,
  presentations, technical reports/departmental working papers and theses.
  Submitted documents will be placed into the submission buffer and would
  become part of <span class=SpellE>OpenMED</span> archive on their acceptance.</p>
  </td>
 </tr>
 <tr >
  <td>
  <p 
 ><span >  </span><a
  href="http://publicdomainresources.webs.com/">Public Domain Resources
  supporting <b >Law, Legal Education &amp;
  Research</b></a><span >            </span><b
  ><span>NEW</span></b></p>
  </td>
 </tr>
 <tr >
  
  <td>
  <p 
 ><span ><span><span > 
  </span><a href="http://www.plos.org/" title="http://www.plos.org/index.html"><span><span ??="">Public Library
  of Science</span></span></a> </span></span>a world leading provider of freely
  accessible peer-reviewed online research information.</p>
  </td>
 </tr>
 <tr >
  
  <td 
   >
  <p 
 ><span ><span><span > 
  </span><a href="http://www.pubmedcentral.gov/"><span class=SpellE><span>PubMed</span></span><span> Central</span></a> </span></span><span
  class=SpellE>PubMed</span> Central (PMC) is the U.S. National Institutes of
  Health (NIH) free digital archive of biomedical and life sciences journal literature.<span
  ><span></span></span></p>
  </td>
 </tr>
 <tr >
  
  <td>
  <p 
 ><span ><span ><span > 
  </span><a href="http://www.scicentral.com/"><span class=SpellE><span>SciCentral</span></span></a></span></span><span
  ><span 
  > </span></span>Gateway to the best scientific research news sources.<span
  ><span></span></span></p>
  </td>
 </tr>
 <tr>
  <td 
   >
  <p 
 ><span ><span><span > 
  </span><a href="http://www.scidev.net/"><span>Science and Development Network</span></a></span></span>
  News, views and information about science, technology and the developing
  world.<span ><span></span></span></p>
  </td>
 </tr>
</table>

</div>

<p >&nbsp;</p>

<div class="table-box" >

<table style="border:1px solid black;">
    <tbody>
  <td 
   >
  <p ><span
  >  </span><a
  href="http://dspace.vidyanidhi.org.in:8080/dspace/"><span class=SpellE><span>Vidyanidhi</span></span><span> – Digital Library and
  E-<span >  </span>Scholarship Portal</span></a> <span
  >Indian ETD (Electronic
  Thesis and Dissertation) Collection</span></p>
  </td>
  <tr>
  <td 
   >
  <p ><b
  ><span >  </span><a href="http://14.139.60.216:8080/jspui"title="E-Prints and ETD of GGSIP University New Delhi INDIA 110078"><span
  class=SpellE><span>DSpace@GGSIPU</span></span></a>
  </b><span >E-Prints and ETD
  of <st1:placename w:st="on">GGS</st1:placename> <st1:placename w:st="on"><span
  >  </span><span class=SpellE>Indraprastha</st1:placename></span>
  <st1:placetype w:st="on">University</st1:placetype> <st1:city w:st="on">Delhi</st1:city>
  </span></p>
  <p ><b
  ><span><span >  </span><a href="http://dspace.ipu.edu:8080/jspui" title="E-Prints and ETD of GGSIP University New Delhi INDIA 110078"><span>Alternate Site</span></a></span></b></p>
  </td>
 </tr>
 <tr>
 
  <td 
  >
  <p ><span
  >  </span><a href="http://shodhganga.inflibnet.ac.in/"><span
  class=SpellE><span >Shodhganga@INFLIBNET</span></span><span> Centre:</span></a><b
  > </b>221 Universities uploaded <b
  >40,000+</b> full text thesis<span
  >    </span><b ><span
  >NEW</span></b></p>
  </td>
 </tr>
 <tr >
     <td>
  
  <p ><span
  >  </span><a href="http://shodhgangotri.inflibnet.ac.in/"title="ShodhGangotri : Repository of Indian Research in Progress (Synopses / Research Proposals) for Ph.D. programme"><span
  class=SpellE>ShodhGangotri</span></a> : Repository of Indian Research in
  Progress details (Synopses / Research Proposals for Ph.D. <span class=SpellE>programme</span>)<span
  >    </span>(<b >2117
  Synopses uploaded</b>)<span >        </span><b
  ><span>NEW<span
  >                  </span></span></b></p>
  </td>
 </tr>
</tbody>
 
</table>

</div></div>

<?php include"footer1.php"
	
?>