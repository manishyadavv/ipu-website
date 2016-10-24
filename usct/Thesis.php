<?php include"usct_header.php"?>
<style>
<!--
 /* Font Definitions */
    
@font-face
	{font-family:"Book Antiqua";
	panose-1:2 4 6 2 5 3 5 3 3 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
 /* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
h1
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-font-kerning:0pt;
	font-weight:normal;
	text-decoration:underline;
	text-underline:single;}
h2
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	font-size:12.0pt;
	font-family:"Times New Roman";
	text-decoration:underline;
	text-underline:single;}
h3
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	font-size:12.0pt;
	font-family:"Times New Roman";
	text-decoration:underline;
	text-underline:single;}
h4
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	font-size:12.0pt;
	font-family:"Times New Roman";}
h5
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:5;
	font-size:12.0pt;
	font-family:"Times New Roman";}
h6
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:6;
	border:none;
	mso-border-top-alt:three-d-emboss;
	mso-border-left-alt:three-d-emboss;
	mso-border-bottom-alt:three-d-engrave;
	mso-border-right-alt:three-d-engrave;
	mso-border-color-alt:windowtext;
	mso-border-width-alt:6.0pt;
	padding:0in;
	mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt;
	font-size:19.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	font-weight:normal;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:7;
	font-size:14.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Book Antiqua";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	font-weight:bold;
	text-decoration:underline;
	text-underline:single;}
p.MsoHeading8, li.MsoHeading8, div.MsoHeading8
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:8;
	font-size:13.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Book Antiqua";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	font-weight:bold;}
p.MsoHeading9, li.MsoHeading9, div.MsoHeading9
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:9;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Book Antiqua";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	font-weight:bold;
	text-decoration:underline;
	text-underline:single;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{margin:0in;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	font-size:18.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;
	text-decoration:underline;
	text-underline:single;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:150%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
@page Section1
	{size:8.5in 11.0in;
	margin:1.0in 1.25in 1.0in 1.25in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
@list l0
	{mso-list-id:291133274;
	mso-list-type:hybrid;
	mso-list-template-ids:-598173106 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l0:level1
	{mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1
	{mso-list-id:746996957;
	mso-list-type:hybrid;
	mso-list-template-ids:-1026003314 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l1:level1
	{mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2
	{mso-list-id:1547334927;
	mso-list-type:hybrid;
	mso-list-template-ids:1215956680 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l2:level1
	{mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>
<!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2050"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
<div class="table-box">
<div class=Section1>

<p class=MsoTitle><span style='font-size:16.0pt;mso-bidi-font-size:12.0pt;
text-decoration:none;text-underline:none'>University School of Chemical
Technology<o:p></o:p></span></p>

<p class=MsoTitle style='margin-left:1.0in'><span style='font-size:15.0pt;
mso-bidi-font-size:12.0pt;text-decoration:none;text-underline:none'>GGS
Indraprastha University<o:p></o:p></span><span style='font-size:12.0pt;font-weight:normal'><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=right style='text-align:right'><b><span
style='font-size:11.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>
  <![if !supportEmptyParas]>
  &nbsp;
  <![endif]>
  <o:p></o:p></span></b></p>

<p class=MsoHeading7>ATTENTION:<span style="mso-spacerun: yes">  </span>STUDENTS<span style='font-size:11.0pt;mso-bidi-font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'></span></p>

<p class=MsoNormal><b>Order of the contents<o:p></o:p></b></p>

<p class=MsoNormal><u><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<ol style='margin-top:0in' start=1 type=1>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Title page<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Declaration<span style="mso-spacerun:
     yes">  </span>/ Supervisor certificate / Dean’s Approval<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Acknowledgement<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Table of contents with page numbers<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>List of fig &amp; tables with page
     numbers<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Abstract<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Main text<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Bibliography or list of references<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Appendices<o:p></o:p></span></li>
</ol>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Book Antiqua"'>Size:</span></b><span
style='font-family:"Book Antiqua"'> International standard paper size A4
(297x210mm) should be used.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Book Antiqua"'>Page
number:</span></b><span style='font-family:"Book Antiqua"'> Page should be
numbered consecutively and clearly. No page number should be indicated on title
page, supervisors certificates, declaration and acknowledgement, however pages
are to counted from title page. From title page to abstract page Greek numbers
should be used. From main text to end of thesis Indian numerals should be used.
All typing should be on right hand pages only.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Book Antiqua"'>Margin:</span></b><span
style='font-family:"Book Antiqua"'> Top 1.0”, Bottom 1.0” Left 1.5” Right 1.0”<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Book Antiqua"'>Line
spacing:</span></b><span style='font-family:"Book Antiqua"'> 1.5<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Book Antiqua"'>Font:</span></b><span
style='font-family:"Book Antiqua"'> Times new roman, size 10/12 for text,
larger fonts may be used for headings &amp; subheadings.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Book Antiqua"'>Folded
diagram/charts:</span></b><span style='font-family:"Book Antiqua"'> These
should be arranged so as to open to the top and right.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Book Antiqua"'>Landscape
chart/ fig:</span></b><span style='font-family:"Book Antiqua"'> Bottom of
chart/ fig should be on right side.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Book Antiqua"'>CD-ROM:</span></b><span
style='font-family:"Book Antiqua"'> All thesis/ report should include soft copy
on CD-ROM accompanied with thesis/report in pocket pasted on inside of back
cover.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Book Antiqua"'>Text:</span></b><span
style='font-family:"Book Antiqua"'> Before producing the final copies of a
thesis/project report the candidate should ensure that all the spelling,
grammar, punctuation and bibliography is complete and exact.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<b><u><span style='font-size:12.0pt;font-family:"Book Antiqua";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:"Times New Roman";mso-ansi-language:
EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always'>
</span></u></b>

<h2><span style='font-size:24.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>Title
Page</span><span style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:
"Book Antiqua"'><o:p></o:p></span></h2>

<p class=MsoNormal><b><u><span style='font-size:16.0pt;mso-bidi-font-size:12.0pt;
font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></b></p>

<div style='border:solid windowtext 3.0pt;padding:1.0pt 4.0pt 1.0pt 4.0pt'>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>Title
of the Thesis/Report<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>Thesis/Report
submitted in partial fulfillment of the requirement for the degree of<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>M.Tech/
B.Tech.<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>In
<o:p></o:p></span></p>

<h6 style='border:none;mso-border-alt:solid windowtext 3.0pt;padding:0in;
mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span style='font-family:"Book Antiqua"'>Chemical
Engineering<o:p></o:p></span></h6>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>Under
the Supervision of<o:p></o:p></span></p>

<h5 style='border:none;mso-border-alt:solid windowtext 3.0pt;padding:0in;
mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span style='font-size:14.0pt;
mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>XYZ<o:p></o:p></span></h5>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>By<o:p></o:p></span></p>

<h5 style='border:none;mso-border-alt:solid windowtext 3.0pt;padding:0in;
mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span style='font-size:16.0pt;
mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>ABC<o:p></o:p></span></h5>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>To<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:17.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>University
School of Chemical Tech. Guru Gobind Singh Indraprastha University<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:17.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>Kashmere
Gate, Delhi-06<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>Month<span
style="mso-spacerun: yes">    </span>Year<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-size:16.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;border:none;
mso-border-alt:solid windowtext 3.0pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt'><span
style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

</div>

<b><u><span style='font-size:12.0pt;font-family:"Book Antiqua";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:"Times New Roman";mso-ansi-language:
EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always'>
</span></u></b>

<h2><span style='font-size:15.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>DECLARATION</span><span
style='font-family:"Book Antiqua"'><o:p></o:p></span></h2>

<p class=MsoNormal><b><u><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></b></p>

<p class=MsoBodyText><span style='font-family:"Book Antiqua"'>This is to
certify that Thesis/Report entitled “…………………………”which is submitted by me in partical
fulfillment of the requirement for the award of degree B.Tech./M.Tech. in
Chemical Engineering to USCT, GGSIP University, Kashmere Gate, Delhi comprises
only my original work and due acknowledgement has been made in the text to all
other material used.<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h4><span style='font-family:"Book Antiqua"'>Date: <span style='mso-tab-count:
8'>                                                                                      </span>Name
of Student<o:p></o:p></span></h4>

<h2><span style='font-family:"Book Antiqua";text-decoration:none;text-underline:
none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h2>

<h2><span style='font-family:"Book Antiqua";text-decoration:none;text-underline:
none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h2>

<h2><span style='font-family:"Book Antiqua";text-decoration:none;text-underline:
none'><span style='mso-tab-count:8'>                                                                                                </span><o:p></o:p></span></h2>

<h2><span style='font-family:"Book Antiqua";text-decoration:none;text-underline:
none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h2>

<h2 align=left style='text-align:left'><span style='font-family:"Book Antiqua";
text-decoration:none;text-underline:none'>APPROVED BY<span style='mso-tab-count:
7'>                                                                               </span><span
style="mso-spacerun: yes">     ...................</span><o:p></o:p></span></h2>

<h2 align=right style='text-align:right'><span style='font-family:"Book Antiqua";
text-decoration:none;text-underline:none'>Dean<o:p></o:p></span></h2>

<p class=MsoNormal align=right style='text-align:right'><span style='font-family:
"Book Antiqua"'>University School of Chemical Technology<o:p></o:p></span></p>

<p class=MsoNormal align=right style='text-align:right'><span style='font-family:
"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h2 align=right style='text-align:right'><span style='font-family:"Book Antiqua";
text-decoration:none;text-underline:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h2>

<h2><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h2>

<h2><span style='font-size:17.0pt;mso-bidi-font-size:12.0pt;font-family:"Book Antiqua"'>Certificate<o:p></o:p></span></h2>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Book Antiqua"'>This is to
certify that thesis/Report entitled “…………………….” which is submitted by
………………………… in partial fulfillment of the requirement for the award of degree
B.Tech./M.Tech. in Chemical Engineering to USCT, GGSIP University, Kashmere
Gate, Delhi is a record of the candidate own work carried out by him under
my/our supervision. The matter embodied in this thesis is original and has not
been submitted for the award of any other degree.<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-family:"Book Antiqua"'>Date: <span
style='mso-tab-count:8'>                                                                                      </span>Supervisor<o:p></o:p></span></b></p>

<p class=MsoNormal><b><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><b><u><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></b></p>

<p class=MsoNormal><b><u><span style='font-family:"Book Antiqua"'>Abstract: </span></u></b><span
style='font-family:"Book Antiqua"'><span style="mso-spacerun: yes"> </span>An
abstract should be 300-500 words in English.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:63.0pt;text-align:justify;text-indent:
-63.0pt'><b><span style='font-family:"Book Antiqua"'>Main Text:</span></b><span
style='font-family:"Book Antiqua"'> Candidate are strongly advised to discuss
with their supervisor the style of writing of the thesis/project report before
writing begins. The Stages of investigation and writing are likely to be
according to the nature of the subject and should be worked out in consultation
with supervisor. However the text should be divided in the chapters and each
chapter, headings and subheadings should be numbered like x.y.z.A.B….. where x
stands for chapter number y stands for headings and z,A,B.. etc stands for<span
style="mso-spacerun: yes">  </span>subsequent subheadings. Chapter heading should
be edited at center while heading and subheadings should be edited at left.
There should be separated uniformity in headings and subheadings. Main chapter
heading should be in capital letters. Each paragraph should be started from the
next line of heading and subheadings. The general guidelines for chapters are
as follows, references should be quoted by authors name or by S.No.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h3><span style='font-family:"Book Antiqua"'>For Research project<o:p></o:p></span></h3>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ol style='margin-top:0in' start=1 type=1>
 <li class=MsoNormal style='mso-list:l1 level1 lfo2;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Introduction<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l1 level1 lfo2;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Literature review<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l1 level1 lfo2;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Scope of the work<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l1 level1 lfo2;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Materials and Methods<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l1 level1 lfo2;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Results and discussions<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l1 level1 lfo2;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Conclusions<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l1 level1 lfo2;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>References<o:p></o:p></span></li>
</ol>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h4><span style='font-family:"Book Antiqua"'>For Techno-Economic feasibility
report (Page limit 50-70)<o:p></o:p></span></h4>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ol style='margin-top:0in' start=1 type=1>
 <li class=MsoNormal style='mso-list:l0 level1 lfo3;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Introduction (including market report)<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo3;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Process selection<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo3;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Material and energy balance<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo3;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Sizing and detailed design of major
     equipments<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo3;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Piping and instrumentation<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo3;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Cost analysis <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo3;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Plant layout <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo3;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>Waste treatment<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo3;tab-stops:list .5in'><span
     style='font-family:"Book Antiqua"'>References<o:p></o:p></span></li>
</ol>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-1.0in'><b><u><span
style='font-family:"Book Antiqua"'>Reference</span></u></b><b><span
style='font-family:"Book Antiqua"'>:</span></b><span style='font-family:"Book Antiqua"'>
<span style='mso-tab-count:1'>    </span>All the references should be arranged
alphabetically or serially as the case may be for quoting in text.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><b><u><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></b></p>

<p class=MsoNormal><b><u><span style='font-family:"Book Antiqua"'>For Journals:<o:p></o:p></span></u></b></p>

<p class=MsoNormal style='margin-left:1.0in'><span style='font-family:"Book Antiqua"'>Kerr,
G.T. : Chemistry of Crystalline Aluminositicate; <b>The J. Phy. Chem.</b>,
April 1968, vol.73, no.3 pp1385-1386.<span style="mso-spacerun: yes">  </span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:1.0in'><span style='font-family:"Book Antiqua"'>Garside,
J. et-al; Industrial crystallization from solution; <b>Chem.. Engg. Sci</b>.,
1985, vol. 40, no.2, pp. 3-26.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><b><u><span style='font-family:"Book Antiqua"'>For books:</span></u></b><span
style='font-family:"Book Antiqua"'> <o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:1.0in'><span style='font-family:"Book Antiqua"'>MeCabe
and Smith; <b>Unit Operations in Chemical Engg.</b>, 4<sup>th</sup> ed., TMH,
pp.812-814.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><u><span style='font-family:
"Book Antiqua"'>Thesis/project report preparation &amp; binding;<o:p></o:p></span></u></b></p>

<p class=MsoNormal style='text-align:justify'><b><u><span style='font-family:
"Book Antiqua"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Book Antiqua"'>Thesis/reports
should normally be bound using temporary binding to facilitate the
incorporation of amendments which might be required by the examiners. After
examination thesis should be hard bound to resist damage or knocking.
Twing-ring, spring-back and spiral binders are not acceptable, as thesis bound
in these ways frequently do not survive longer.<o:p></o:p></span></p>

</div>
</div>

<?php include"usct_footer.php"?>