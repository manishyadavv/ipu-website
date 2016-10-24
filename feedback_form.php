<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ipu_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['message']))
{
if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
		echo "<script type='text/javascript'>alert('The captcha code does not match!');</script>";
	}
else{
$name=htmlentities($_POST['name']);
$email=htmlentities($_POST['email']);
$message=htmlentities($_POST['message']);

$stmt = $conn->prepare("INSERT INTO feedback (name,email,comment) VALUES (?,?,?)");
$stmt->bind_param("sss", $name, $email, $message);

$stmt->execute();
echo "<script type='text/javascript'>alert('Feedback sent successfully!');</script>";
$stmt->close();
}
$conn->close();
}

else{
//echo 'Please fill all the fields.';
}
?> 
<style>
/* #### Dark Matter #### */
.dark-matter {
    margin-left: auto;
    margin-right: auto;
	margin-top:20px;
    width: 85ss0px;
    background: #041E54;
    padding: 20px 30px 20px 30px;
    font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #D3D3D3;
    text-shadow: 1px 1px 1px #444;
    border: none;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.dark-matter h1 {
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom: 1px solid #444;
    margin: -10px -30px 30px -30px;
}
.dark-matter h1>span {
    display: block;
    font-size: 11px;
}
.dark-matter label {
    display: block;
    margin: 0px 0px 5px;
}
.dark-matter label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    font-weight: bold;
}
.dark-matter input[type="text"], .dark-matter input[type="email"], .dark-matter textarea, .dark-matter select {
    border: none;
    color: #525252;
    height: 25px;
    line-height:15px;
    margin-bottom: 20px;
    margin-right: 8px;
    margin-top: 2px;
    outline: 0 none;
    padding: 5px 0px 5px 5px;
    width: 70%;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    background: #DFDFDF;
}
.dark-matter select {
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    appearance:none;
    -webkit-appearance:none; 
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
    color: #525252;
    line-height: 25px;
}
.dark-matter textarea{
    height:100px;
    padding: 5px 0px 0px 5px;
    width: 70%;
}
.dark-matter .button {
    background: #FFCC02;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #555;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    text-shadow: 1px 1px 1px #FFE477;
    font-weight: bold;
    box-shadow: 1px 1px 1px #3D3D3D;
    -webkit-box-shadow:1px 1px 1px #3D3D3D;
    -moz-box-shadow:1px 1px 1px #3D3D3D;
}

.dark-matter .button:hover {
    color: #333;
    background-color: #EBEBEB;
}
</style>

<div class="dark-matter">
<form action="feedback_form.php" method="POST" class="STYLE-NAME">
    <h1 align="center">FEEDBACK FORM 
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Name :</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name"/>
    </label>
    
    <label>
        <span>Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
    </label>
    
    <label>
        <span>*Message :</span>
        <textarea id="message" name="message" placeholder="Your Message to Us" required></textarea>
    </label> 
     
     <label>
        <span>&nbsp;</span> 

<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' >
<label>
	<span>*Captcha :</span>
	<input id="6_letters_code" name="6_letters_code" type="text"><br>

        <span>&nbsp;</span> <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</label>
	<label>
        <input type="submit" class="button" value="Send" /> 
    </label>    
</form>
</div>

   