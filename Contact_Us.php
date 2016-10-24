<?php
include 'header.php';
?>
<script>
  ( function( $ ) {
$( document ).ready(function() {
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});
});
} )( jQuery );
</script>
	
           <!-- ## START OF Contact Us ## -->

<br>		   
<div id='cssmenu'>

<center><h2 id="heading1" >CONTACT US</h2></center>
<br>
<ul>
   <li class='has-sub'><a hreff='#'><span>Helpline Numbers</span></a>
      <ul>
         <li><a hreff='#'><span>
		 
           <table>
  <tr> 
    
    <th >Section</th>
    <th >Phone Number </th>
  </tr>
  <tr >
    
    <td >Admission Helpline </td>
    <td >011-25302167<br>
    011-25302168<br>
    011-25302169</td>
  </tr>
  <tr >
    <td colspan="3" align="center" >The admission helpline is operational from 9.00 am to 5.30 pm on all working days (Monday to Friday excluding  Gazetted holidays / Notified holidays)</td>
  </tr>
 
</table>
         
		 </span></a></li>
         
      </ul>
   </li>
   
   <li class='has-sub'><a hreff='#'><span>Administration</span></a>
      <ul>
         <li><a hreff='#'><span>
		 
           <h1 style="text-align:center">ADMINISTRATIVE & OTHER OFFICER</h1>
           <table id="customers">
		   <tr bgcolor="#eeeeee">
    <th >Section</th>
    <th >Phone Number </th>
  </tr>
    <tr> 
      
      <td>
        <p><a hreff="/vc/vc_ipu.htm"><b><u>Vice Chancellor</u></b></a></p>
        Prof. Anil K. Tyagi</td>
      <td width="46%"><br>
 +91-11-25302104, 25302105<br><br>
Fax: +91-11-28035243<br>
Email:  
vc 
[AT]   ipu.ac.in
 </td>
    </tr>
    <tr>
      
      <td >
        <b><u>Pro Vice Chancellor</u></b>
        Prof. Pushplata Tripathi </td>
      <td > +91-11-25302108<br />  
            <br />
    Email: provc [AT] ipu.ac.in
        </td>
    </tr>
    <tr > 
      
      <td><p><b><u>Registrar</u></b> </p>
        Sh. Rajiv Kale      </td>
      <td>+91-11-25302113, 25302114 <br>        <br>
Fax: +91-11-25302111 <br>
Email: registrar   [AT]   ipu.ac.in </td>
    </tr>
    <tr >
     
      <td><p><a hreff="/accounts/accountsmain.htm"><strong>Accounts Division </strong></a></p>
          Sh. Sushil Kumar Tanwar <br />
              <strong>Controller of Finance</strong></td>
      <td>+91-11- 25302197 <br />
    Email: cof [AT] ipu.ac.in</td>
    </tr>
    <tr  >
      <td> <a hreff="/acadaffair/acadaffairmain.htm"><strong>CoE (Planning) </strong></a> 
         Prof. H.C. Rai <br />
      </td>
      <td height="82">+91-11-25302133 <br />
    Email: director.acad [AT] ipu.ac.in </td>
    </tr>
    <tr> 
      <td><a hreff="http://ggsipuresults.nic.in/ipu//"><b><u>Examination Division </u></b></a>
           <a hreff="http://ipu.ac.in/usitnweb/faculty/dr-pravin-chandra.htm">Dr. Pravin Chandra</a> <br>
    Controller of Examinations (Operations)      </td>
      <td>+91-11 - 25302252
      Fax: +91-11-25302248 <br>
Email: coe   [AT]   ipu.ac.in</td>
    </tr>
    <tr >
     
      <td><a hreff="/uwd/uwdmain.htm"><strong>University Works Division</strong></a>
          Sh. V. P. Shrivastav <br />
      Superintending Engineer </td>
      <td>+91-11 - 25302288, 25302289 
          Fax: +91-11-25302290<br />
      Email: Se.uwd [AT] ipu.ac.in </td>
    </tr>
    <tr >
     
      <td><a hreff="http://ipu.ac.in/academics/academicsmain.htm"><strong>Admission Branch</strong></a>
          Prof. Pravin Chandra <br />
          Controller of Examinations (Operations)
          </td>
      <td> +91-11-25302152, 25302154, <br />
          <br />
    Fax: +91-11-25302158 <br />
    Email: acad.admissions [AT] ipu.ac.in </td>
    </tr>
    <tr >
     
      <td><strong><u>Coordination</u></strong>
         Sh. Sushil Kumar Vern <br />
      Jt. Registrar </td>
      <td>+91-11 - 25302135, 25302136 
        Email: coordination [AT] ipu.ac.in </td>
    </tr>
    <tr >
      
      <td><strong><u><a hreff="/AcadCoord/acadcordmain.htm">Academic Coordination & Students Support Branch/ Legal Branch</a></u></strong>
          Dr. Nitin Malik<br />
      Joint Registrar </td>
      <td>
        +91-11- 25302160, 25302161
        Email: acad_coord [AT] ipu.ac.in </td>
    </tr>
    <tr>
      
      <td><a hreff="http://ipu.ac.in/establish/establishmain.htm"><strong>Personnel Branch</strong></a>
          Brig. P.K. Upmanyu<br />
Joint Registrar
        </td>
      <td>+91-11 - 25302182, 25302183, 25302184, 25302188 
        Email: personnel [AT] ipu.ac.in </td>
    </tr>
    <tr  >
      
      <td><a hreff="/estate/estatesecmain.htm"><strong>Estate Branch </strong></a>
         Sh. A. K. Verma<br />
            Joint Registrar
          
        </td>
      <td>+91-11-25302245 <br />
    Email: estate [AT] ipu.ac.in </td>
    </tr>
    <tr>
      
      <td><a hreff="http://ipu.ac.in/affiliates/afliliatesmain.htm"><strong>Affiliation Branch</strong></a> 
          Prof. C. S. Rai <br />
            Dean, USICT
        </td>
      <td>Phone: +91-11-25302172,25302173, 25302174 <br />
        Email: affiliation [AT] ipu.ac.in </td>
    </tr>
    <tr  >
     
      <td><a hreff="http://ipu.ac.in/store/storemain.htm"><strong>Purchase Branch</strong></a>
          Dr. Renu Tomar<br />
            Assistant Registrar
            <br />
        </td>
      <td> +91-11-25302149 , 25302150 <br />
    Email: purchase [AT] ipu.ac.in </td>
    </tr>
    <tr>
      
      <td><a hreff="/genadmin/genadminmain.htm"><strong>General Administration Branch </strong></a>
          Dr. Pankaj Aggarwal <br />
      Dy. Registrar.</td>
      <td>+91-11 - 25302138, 25302139 
        Email: ga [AT] ipu.ac.in </td>
    </tr>
    <tr >
      
      <td><u><strong>Central Store </strong></u>
          Ms. Abha Vermani<br />
      Dy. Registrar</td>
      <td>+91-11 - 25302140, 25302141, 25302142 
        Email: central.stores [AT] ipu.ac.in </td>
    </tr>
    <tr >
      
      <td><u><strong><a hreff="proctor091213.pdf">Proctor</a></strong></u>
      Prof. P. C. Sharm
      </td>
      <td>+91-11 - 25302464
Email: proctor   [AT]   ipu.ac.in      </td>
    </tr>
    <tr  >
      
      <td><u><strong>Chief Warden</strong></u>
       Prof. P. C. Sharma </td>
      <td>+91-11 - 25302306 <br>
Email: prodyut.bhattacharya   [AT]   ipu.ac.in  </td>
    </tr>
    <tr>
      
      <td><a hreff="http://ipu.ac.in/pubrelations/prhome.htm"><strong>Public Relation Section</strong></a>
	   Md. Ahtesham Ullah<br />
	      Dy. Registrar
          
		Sh. Nalini Ranjan<br>
            P.R.O.</td>
      <td> +91-11-25302170, 25302171  <br>
Email: pro   [AT]   ipu.ac.in
</td>
    </tr>
    <tr >
      
      <td><a hreff="/ccgpc/ccgpcmain.htm"><strong>Centralized Career Guidance and Placement Cell</strong></a> 
      <a hreff="http://ipu.ac.in/usitnweb/faculty/dr-bv-ramana-reddy.htm">Prof. BVR Reddy</a>, Chairman</td>
      <td>+91-11-25302703    
Email: ccgpc   [AT]   ipu.ac.in
  </td>
    </tr>
    <tr >
      
      <td><a hreff="/staffdc/sdcmain.htm"><strong>Staff Development Cell </strong></a>
          Prof. Arvinder Kaur <br>
            Chairperson<br>
         </td>
      <td>+91-11-25302240 <br>
Email: sdp   [AT]   ipu.ac.in
</td>
    </tr>
    <tr >
      
      <td> <a hreff="AacdGrievCell/AcadGrievCellMain.htm"><strong>Academic Grievance Committee </strong></a>
      Prof. P.C. Sharma<br>
        Chairman</td>
      <td>Email: prof.pcsharma   [AT]   ipu.ac.in</td>
    </tr>
    <tr > 
      
      <td><a hreff="http://ipu.ac.in/rti/rtiindex.htm">Right to Information Act, 2005 </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr  > 
      
      <td ><a hreff="http://ipu.ac.in/norms/normordmain.htm">Act, Statutes and Ordinances </a></td>
      <td >&nbsp;</td>
    </tr>
    <tr >
      
      <td><a hreff="/ordernotice/ordersnoticemain.htm">Orders / Circulars (Miscellaneous)</a></td>
      <td>&nbsp;</td>
    </tr>
    <!--
    <tr>
      <td  align=right height="28">
        <li> </td>
      <td height="28"><a hreff="http://ipu.ac.in/ordernotice/ordersnoticemain.htm">Order / Notice</a></td>
    </tr>
-->
  </table>
         
		 </span></a></li>
         
      </ul>
   </li>
   
   
   <li class='has-sub'><a hreff='#'><span>Schools</span></a>
      <ul>
         <li><a hreff='#'><span>
		 
           <h1 style="text-align:center">University Schools</h1>
           <table id="customers">
		   
  <tr> 
    <th>Name of the Schools</th>
    <th>Name of the Dean</th>
    <th>Office Phone No.</th>
  </tr>
  <tr> 
    <td><a hreff="./usict" >University 
      School of Information &amp; Communication Technology</a></td>
    <td align="right"><div align="left"><a hreff="./usict/Dean.php">Prof. C. S. Rai </a></div></td>
    <td align="right"> <div align="right">011-2530-2702</div></td>
  </tr>
  <tr> 
    <td><a hreff="./usct">University 
      School of Chemical Technology</a></font></td>
    <td align="right"><div align="left"><a hreff="./usct/Dean.php">Prof. U K Mandal </a></div></td>
    <td align="right"> <div align="right">011-2530-2460</div></td>
  </tr>
  <tr> 
    <td><a hreff="./usbt">University School of 
      Biotechnology</a></td>
    <td align="right"><div align="left"><a hreff="./usbt/Dean.php">Prof. P. C. Sharma</a> </div></td>
    <td align="right"> <div align="right">011-2530-2301</div></td>
  </tr>
  <tr> 
    <td><font color="#000099"><a hreff="./usms">University 
      School of Management Studies</a></font></td>
    <td align="right"><div align="left"><a hreff="./usms/Dean.php">Prof. Sanjiv Mittal </a></div></td>
    <td align="right"> <div align="right">011-2530-2604</div></td>
  </tr>
  <tr> 
    <td><font color="#000099"><a hreff="./usem">University 
      School of Environment Management</a></font></td>
    <td align="right"> <div align="left"><a hreff="./usem/Dean.php">Prof. Anubha Kaushik Nee Sinha</a> </div></td><td align="right"> <div align="right">011-2530-2360</div></td>
  </tr>
  <tr> 
    <td><font color="#000099"><a hreff="./usbas">University School of Basic 
      & Applied Sciences</a></font></td>
    <td align="right"><div align="left"><a hreff="./usbas/Dean.php">Prof. A. K. Narula</a></div></td>
    <td align="right"> <div align="right">011-2530-2400</div></td>
  </tr>
  <tr> 
    <td><font color="#000099"><a hreff="./ushss">University School 
      of Humanities &amp; Social Sciences</a></font></td>
    <td align="right"><div align="left"><a hreff="./ushss/Dean.php">Prof. Anup Beniwal </a></div></td>
    <td align="right"> <div align="right">011-2530-2500</div></td>
  </tr>
  <tr> 
    <td><a hreff="./uslls">University School of Law and Legal Studies</a></td>
    <td align="right"><div align="left"><a hreff="./uslls/Dean.php"> Prof. M. Afzal Wani </a></div></td>
    <td align="right"> <div align="right">011-2530-2570</div></td>
  </tr>
  <tr> 
    <td><a hreff="./uset">University School of Engineering &amp; Technology</a></td>
    <td align="left"><div align="left"><a hreff="./uset/Dean.php">Prof. BVR Reddy </a></div></td>
    <td align="left"><div align="right">011-2530-2739</div></td>
  </tr>
  <tr> 
    <td><a hreff="./use">University School of Education</a></td>
    <td align="right"><div align="left"><a hreff="./use/Dean.php">Dr. Sangeeta Chauhan </a>(Faculty Incharge)</div></td>
    <td align="right"> <div align="right">011-2530-2540</div></td>
  </tr>
  <tr> 
    <td><a hreff="./usap">University School of Architecture &amp; Planing</a></td>
    <td align="right"><div align="left">Prof. 


 Neeraja Lugani Sethi</div></td>
    <td align="right"><div align="right">011-2390-0175</div></td>
  </tr>
  <tr> 
    <td><a hreff="./usmphs">University School of Medicine and Para-Medical 
      Health Sciences</a></td>
    <td align="right"><div align="left">Prof. T.P. Yadav </div></td>
    <td align="right"><div align="right">-</div></td>
  </tr>
  <tr> 
    <td><a hreff="./usmc">University School of Mass Communication</a></td>
    <td align="right"><div align="left"><a hreff="./usmc/Dean.php">Prof. Chandrakant P. Singh </a></div></td>
    <td align="right"><div align="right">011-2530-2346</div></td>
  </tr>
</table>
<h2 align="center"><strong>University Centres </strong></h2>
<table width="600" border="2" align="center"  cellpadding="10" bordercolor="#BAC8F6">
  <tr>
    <td width="269">
      <div align="center"><b>Name of the University Centre </b></div></td>
    <td width="141" align="right"><div align="center"><b>Name of the Director </b></div></td>
    <td width="112" align="right">
      <div align="center"><strong>Office Phone No. </strong></div></td>
  </tr>
  <tr>
    <td> <a hreff="http://ipu.ac.in/uscdm/uscdmhome.htm">University Centre for Disaster Management Studies </a> </td>
    <td align="right"><div align="left"> <a hreff="http://ipu.ac.in/usem/enhead.htm">Prof. Amarjit Kaur </a> </div></td>
    <td align="right">
      <div align="right"> 011-25302780 <br />
011-25302782 </div></td>
  </tr>
  <tr>
    <td><a hreff="http://ipu.ac.in/ucitim/ucitimhome.htm">University IT Services (UITS) Cell </a></td>
    <td align="right"><div align="left">
     Dr. V. P. Vishwakarma 
      </div></td>
    <td align="right"><div align="center">011-25302746</div></td>
  </tr>
</table>
         
		 </span></a></li>
         
      </ul>
   </li>
   
   
   
  
   
   <li class='has-sub'><a hreff='#'><span>Examination</span></a>
      <ul>
         <li><a hreff='#'><span>
		 
           <h1 style="text-align:center">OFFICERS OF THE EXAMINATION DIVISION (OPERATION) </h1>
           <table id="customers">
  <tr bgcolor="#eeeeee">
    <th colspan="2"><div align="center"><b>Controller of Examinations (Operations) </b></div></th>
  </tr>
  <tr>
    <td><a hreff="http://ipu.ac.in/usitnweb/faculty/dr-pravin-chandra.htm"> Prof.. Pravin Chandra </a></td>
    <td ><div align="right"><a hreff="tel://91-11-2530-2250">+91 (11) 2530-2250</a></div>      <div align="right"><br>
    </div></td>
  </tr>
  <tr>
    <td width="53%"><a hreff="http://ipu.ac.in/usitnweb/faculty/dr-pravin-chandra.htm"> </a>P.S. to Controller of Examination (Operations) </td>
    <td width="47%" ><div align="right"><a hreff="tel://91-11-2530-2252">+91 (11) 2530-2252<br>
      Fax:+91-11- 25302248    </a></div></td>
  </tr>

  <tr bgcolor="#eeeeee">
    <th colspan="2" ><div align="center"><b>Conduct  / Coordination Branch</b></div></th>
  </tr>
  <tr>
    <td >Mr.  A. D. Lamba <br>
      Deputy Ragistrar <br>
      (Officer In-Charge, Conduct / Co-ordination Branch)</td>
    <td ><p>
      <div align="right"><a hreff="tel://91-11-2530-2261">+91 (11) 2530-2261</a></div>
      <div align="right"><a hreff="tel://91-11-2530-2261">+91 (11) 2530-2262</a></div><div align="right"><a hreff="tel://91-11-2530-2261">+91 (11) 2530-2263</a></div></p>
    </td>
  </tr>
<tr>
    <td >Dr. (Mrs.) Ruchika Minocha <br>
(Assistant Registrar)<br> 
Incharge, Conduct Branch-I</td>
    <td ><p><div align="right"><a hreff="tel://91-11-2530-2275">+91 (11) 2530-2275</a></div></p></td>
  </tr>
  <tr>
    <td >Sh. Y. S. Kataria <br>
    Section Officer <br> 
    Conduct Branch- II</td>
    <td ><p><div align="right"><a hreff="tel://91-11-2530-2259">+91 (11) 2530-2259</a></div></p></td>
  </tr>
  <tr>
    <td width="53%">Ms. Sonia Ahluwalia <br> 
      ( Section Officer ) <br>
      Co-ordiation Branch </td>
    <td width="47%" ><p>
      <div align="right"><a hreff="tel://91-11-2530-2276">+91 (11) 2530-2276</a></div><div align="right"><a hreff="tel://91-11-2530-2277">+91 (11) 2530-2277</a></div></p>
</td>
  </tr>

  <tr bgcolor="#eeeeee">
    <th colspan="2"><div align="center"><strong>Result </strong></div></th>
  </tr>
  <tr>
    <td >Mr. Amit Thakur<br>Assistant Registrar<br>
      (Incharge, Result Branch-I)
        </td>
    <td >
      <div align="right"><a hreff="tel://91-11-2530-2266">+91 (11) 2530-2266</a></div><div align="right"><a hreff="tel://91-11-2530-2267">+91 (11) 2530-2267</a></div>
</td>
  </tr>
  <tr>
    <td >Mr.  Manoj Rana <br>
      Assistant Registrar <br>
      (Incharge, Result Branch-II)    
    </td>
    <td ><div align="right"><a hreff="tel://91-11-2530-2253">+91 (11) 2530-2253</a></div></td>
  </tr>
  <tr>
    <td ><a hreff="http://ipu.ac.in/usms/sanjaykrs.htm">Dr. Sanjay Kumar S. </a> <br>
         (Assitant Registrar (Additional Charge) )<br>
         In-Charge, Result Branch-III
    </td>
    <td><div align="right"><a hreff="tel://91-11-2530-2280">+91 (11) 2530-2280</a></div></td>
  </tr>
 <tr>
    <td ><a hreff="http://ipu.ac.in/usbt/sureshkumar.htm">Dr. Suresh Kumar </a><br>
      (Assitant Registrar (Additional Charge) )      <br>
         Incharge, Result Branch-IV
    </td>
    <td ><div align="right">-</div></td>
  </tr>

  <tr>
    <td >Mr.  Naveen Budhiraja<br>
 (Assistant Registrar) <br>
 In-Charge Result Branch-V</td>
    <td><div align="right"><a hreff="tel://91-11-2530-2273">+91 (11) 2530-2273</a></div></td>
  </tr>

  <tr bgcolor="#eeeeee">
    <th colspan="2"><div align="center"><strong>Evaluation </strong></div></th>
  </tr>
  <tr>
    <td><a hreff="http://ipu.ac.in/usitnweb/faculty/pushpendra-singh-bharti.htm"> Dr. P. S. Bharti </a><br>
      (Assitant Registrar (Additional Charge) )       <br>
      Incharge, Evaluation Branch </td>
    <td ><div align="right">-</div></td>
  </tr>

  <tr bgcolor="#eeeeee">
    <th colspan="2"><div align="center"><strong>Secrecy </strong></div></th>
  </tr>
  <tr>
    <td>Dr. Manjoj Bhatt <br>

      ( Assistant Registrar )<br>
          Incharge, Secrecy Branch
    </td>
    <td ><div align="right"><a hreff="tel://91-11-2530-2255">+91 (11) 2530-2255</a></div></td>
  </tr>
  <tr bgcolor="#eeeeee">
    <th colspan="2"><div align="center"><strong>EDP  / Server </strong></div></th>
  </tr>
  <tr>
    <td><a hreff="sanjibsahu.htm">Mr. Sanjib Kumar Shahu </a><br>
    (Assistant Registar) <br>
    Incharge, EDP Branch </td>
    <td ><div align="right"><a hreff="tel://91-11-2530-2264">+91 (11) 2530-2264</a></div></td>
  </tr>
  <tr>
    <td>Mr.  Akash Mishra <br>
    (System Analyst) <br> 
    Incharge, Server Branch </td>
    <td ><div align="right"><a hreff="tel://91-11-2530-2269">+91 (11) 2530-2269</a></div></td>
  </tr>
  <tr bgcolor="#eeeeee">
    <th colspan="2"><div align="center"><strong>Record / Degree </strong> </div>      <div align="center"><b></b></div></th>
  </tr>
  <tr>
    <td>Ms. Shikha Aggarwal<br>
(Assistant Registrar)<br>
Incharge, Record Branch </td>
    <td ><div align="right"><a hreff="tel://91-11-2530-2278">+91 (11) 2530-2278</a></div></td>
  </tr>
  <tr>
    <td> Ms. Shikha Aggarwal<br>
      (Assistant Registrar)<br>
      Incharge, Degree Branch </td>
    <td ><div align="right"><a hreff="tel://91-11-2530-2279">+91 (11) 2530-2279</a></div></td>
  </tr>
  <tr bgcolor="#eeeeee">
    <th colspan="2"><div align="center"><strong>RTI &amp; Legal (Examination Division Only) </strong></div></th>
  </tr>
  <tr>
    <td>Dr. Sanjay Kumar S. <br>
    (Assitant Registrar (Additional Charge) )<br>
    Incharge, RTI &amp; Legal Branch </td>
    <td ><div align="right"><a hreff="tel://91-11-2530-2280">+91 (11) 2530-2280</a></div></td>
  </tr>
<tr bgcolor="#eeeeee">
    <th colspan="2"><div align="center"><strong>Store / Purchase  (Examination Division Only)</strong></div></th>
  </tr>
  <tr>
    <td><a hreff="http://ipu.ac.in/usitnweb/faculty/pushpendra-singh-bharti.htm">Dr. P. S. Bharti </a><br>
(Assitant Registrar (Additional Charge) ) <br>
Incharge, Store Branch </td>
    <td ><div align="right">-</div></td>
  </tr>
  <tr>
    <td>Ms. Shikha Aggarwal<br>
(Assistant Registrar)<br>
Incharge, Purchase Branch </td>
    <td >
      <div align="right"><a hreff="tel://91-11-2530-2279">+91 (11) 2530-2279</a>
        
      </div></td>
  </tr>

</table>
         
		 </span></a></li>
         
      </ul>
   </li>
   
   
   
   
   <li class='has-sub'><a hreff='#'><span>Anti Ragging</span></a>
      <ul>
         <li><a hreff='#'><span>
		 
           <h1 style="text-align:center">24X7 ANTI-RAGGING HELPLINE</h1>
           <table id="customers">
  <tr> 
    <td >Toll Free Anti-Ragging Helpline Number </td>
    <td ><strong>1800-180-5522</strong></td>
  </tr>
  <tr> 
    <td>E-Mail</td>
    <td>helpline@antiragging.net</td>
  </tr>
  <tr>
    <td>The other Toll Number </td>
    <td>155222</td>
  </tr>
               <tr>
    <td><a hreff="/affiliates/raging270810.pdf">Anti-Ragging 
          Measures</a></td>
    <td><a hreff="/contact/raging270712.pdf">Preventive steps to curb ragging in GGSIP University</a></td>
  </tr>
</table>
         
		 </span></a></li>
         
      </ul>
   </li>
   
   
</ul>
</div>
           
           
           
           <div class="top_page" style="align-content:center; text-align:center; margin-top:20px">
           <h2 style="">Contact Details</h2>
           <h3>Guru Gobind Singh Indraprastha University </h3>
			<h3>Sector - 16C Dwarka </h3>
			<h3>Delhi - 110078, India</h3>

			<h3>Tel: +91-11-25302170</h3>
			<h3>Fax: +91-11- 25302111</h3>
            <br><br>
            <iframe width="700" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=ggsipu+sector+16-c+dwarka&amp;aq=&amp;sll=28.732743,77.094154&amp;sspn=0.132161,0.219383&amp;ie=UTF8&amp;hq=ggsipu+sector+16-c&amp;hnear=Dwarka,+New+Delhi,+Delhi&amp;ll=28.59658,77.02137&amp;spn=0.052752,0.072956&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
            
           </div>
      
          
    
        <?php
include 'footer1.php';
?>