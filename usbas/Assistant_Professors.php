<?php include"usbas_header.php";
include"../../../credential.conf";
?>
<script>
$(document).ready(function() {
    $("i").click(function(event) {
       var id=$(this).attr("id");
	$("."+id).fadeToggle("10000","linear");

    });
});
</script>

<?php 
$sql = "SELECT * FROM professors where university_school='University School of Basic & Applied Sciences' AND designation='Assistant Professor'";
	$retval = mysql_query( $sql, $conn );
?>
 <div class="usict_prof">
                  

<br>
<div class="big">
<h1><strong>ASSISTANT PROFESSORS</strong></h1>

<?php
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
?>
  <div class="proff">
    <h2 text-align="justify"><?php echo $row['name']?></h2><p text-align="justify">(<?php echo $row['designation']?>)</p>
      <h4 text-align="justify"><em><strong>Area Of Specialization:</strong></em><?php echo "\t".$row['area_of_specialization']?></h4>     
  <i class="fa fa-chevron-circle-down fa-2x button1" id="<?php echo "click".$row['s_no']?>"></i>
  
  
  
  
  
  <div class="<?php echo "click".$row['s_no']?>" style="display:none" >
    
        <img src="images/<?php echo $row['s_no']?>.jpeg" alt='<?php echo $row['name']?>' class="prof_pic" />
    
        <div id="contact-info" class="vcard">
        
           
        
            <h1 class="fn"></h1>
            
        
            <h4 text-align="justify">
                 <?php
        if ($row['room_no']){
    ?>
                Room No: <span class="tel"><?php echo $row['room_no']?></span><br><br>
                <?php
    }
        ?>
                <?php
        if ($row['Contact_Number_Official']){
    ?>
                Phone No(Office): <span class="tel"><?php echo $row['Contact_Number_Official']?></span><br><br>
                <?php
    }
        ?>
                
                
               <?php
        if ($row['Email_id']){
    ?>
                Email-id: <span class="tel"><?php echo $row['Email_id']?></span><br><br>
                <?php
    }
        ?>
            </h4>
        </div>
           
        <br>
        <div class="ink">
            
            <?php
        if ($row['educational_qualification']){
    ?>
                <article><strong>Education</strong></article>
            <article><?php echo $row['educational_qualification']?></article> 
            <br>
                <?php
    }
        ?>
             <?php
        if ($row['field_of_interest']){
    ?>
                <article><strong>Field Of Interest</strong></article>
            <article><?php echo $row['field_of_interest']?></article> 
            <br>
                <?php
    }
        ?>
             <?php
        if ($row['teaching_experience']){
    ?>
                <article><strong>Teaching Experience</strong></article>
            <article><?php echo $row['teaching_experience']?></article> 
            <br>
                <?php
    }
        ?>
             <?php
        if ($row['Research_publications']){
    ?>
                <article><strong>Research Publication</strong></article>
            <article><?php echo $row['Research_publications']?></article> 
            <br>
                <?php
    }
        ?>
             <?php
        if ($row['Awards_and_achievements']){
    ?>
                <article><strong>Awards And Achievements</strong></article>
            <article><?php echo $row['Awards_and_achievements']?></article> 
            <br>
                <?php
    }
        ?>
             <?php
        if ($row['additional_information']){
    ?>
                <article><strong>Additional Information</strong></article>
            <article><?php echo $row['additional_information']?></article> 
            <br>
                <?php
    }
        ?>
        </div>
       
    </div>
  
  
 </div>
      <?php
    }
     ?>
      
  </div>  
</div>
<?php include"../uss_footer.php"?>