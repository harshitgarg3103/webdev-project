<!DOCTYPE html>
<html>
<head>
	<title>Helpline</title>
</head>
<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{

if( document.complaints.fname.value == "" )
{
	alert( "Please provide your first name!" );
	document.complaints.fname.focus() ;
	return false;
}

if( document.complaints.lname.value == "" )
{
	alert( "Please provide your lastname!" );
	document.complaints.lname.focus() ;
	return false;
}
if( document.complaints.mno.value == "" )
{
	alert( "Please provide your contact number!" );
	document.complaints.mno.focus() ;
	return false;
}

if( document.complaints.address.value == "" )
{
	alert( "Please provide your proper address!" );
	document.complaints.address.focus() ;
	return false;
}
if(document.complaints.issue.value=="None")
{alert("choose atleast one issue");
document.complaints.issue.focus();
return false;
}
var p= /\d{10}/
if(!p.test(document.joinus.mno.value))
{
	alert("mobile number must contain 10 digits\nfor instance::1234567899");
	document.joinus.mno.focus();
	return false;
}
}
</script>
<body>
	<link rel="stylesheet" type="text/css" href="css/stylesignup.css">
<div id="signup-box"><div class="signup"><center>
  <h1>Don't Bother</h1>
  <h3>We are here for you!</h3>
  <h3>clarify your hassle</h3>
  <form onsubmit="return validate()" action="complaints.php" method="POST" name="complaints">
  <input type="text" name="fname" placeholder="First Name"required/>
  <input type="text" name="lname" placeholder="Last Name"required/>
  <input type="text" name="mno" placeholder="Mobile No."required/>
  <input type="textarea" name="address" placeholder="address"required/>


	<div class="dev">
		Choose issue: <select name="issue">
			<option value="None">NONE</option>

    <option value="Animal Welfare">Animal Welfare</option>
    <option value="Blood Donation">Blood Donation</option>
    <option value="Child Labour">Child Labour</option>
    <option value="Climate Change">Climate Change</option>
		<option value="Crime Against Women">Crime Against Women</option>
				<option value="Cyber Crime">Cyber Crime</option>
						<option value="Education">Education</option>
								<option value="Health Care">Health Care</option>
										<option value="Sexual Harassment">Sexual Harassment</option>
												<option value="Waste Managemant">Waste Managemant</option>
														<option value="Others">Others</option>
  </select></div><br>
		<input type="text" name="issuedef" placeholder="have something to say now!!">
	<input type="submit" name="Apply" value="Submit"/></center></form>
</div></div></body>
</html>
