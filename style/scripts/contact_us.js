<!-- script for searchbox-->

function showResult(str) {
  if (str.length==0) { 
    document.getElementById("wrapper").innerHTML="";
    document.getElementById("wrapper").style.border="0px";
    document.getElementById("wrapper").style.display="none";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("wrapper").innerHTML=xmlhttp.responseText;
      document.getElementById("wrapper").style.display="block";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}


function showResultuss(str) {
  if (str.length==0) { 
    document.getElementById("wrapper").innerHTML="";
    document.getElementById("wrapper").style.border="0px";
    document.getElementById("wrapper").style.display="none";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("wrapper").innerHTML=xmlhttp.responseText;
      document.getElementById("wrapper").style.display="block";
    }
  }
  xmlhttp.open("GET","../livesearchuss.php?q="+str,true);
  xmlhttp.send();
}

<!-- script for tables-->
var element;
$(document).ready(function() {
    $("tr").click(function(event) {
       var id=$(this).attr("id");
	$("."+id).toggle();
	element=$("."+id).map(function(){
    return this.id;
	}).get();
	for(var i=0; i<element.length; i++) {
	$("."+element[i]).hide();
	}
    });	
});

 
