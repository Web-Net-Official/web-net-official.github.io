<!DOCTYPE html>
<html>
<title>Mail</title>	
<link rel="shortcut icon" href="img/icons/favicon.png" type="image/png" sizes="16x16">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: dodgerblue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: blue;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input[type=file]{
background-color: white;
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
</style>
</head>
<body>
<center>
<h1><font face="caliph">MAIL</font></h1>
</center>
<div class="container">
 <form action="smail.php" method="post">
    <label for="toemail">To Email <font color="red"><b>*</b></font></label>
	 <!-- multiple emails can be added at once example someone@example.com, someone2@example.com-->
    <input type="text" id="toemail" name="toemail" placeholder="Enter client Email.." required>
	
	<label for="from">From Name <font color="red"><b>*</b></font></label>
    <input type="text" id="from" name="fromname" placeholder="Enter Name ( your name / company name ).." required>
    
	<label for="from">From Email <font color="red"><b>*</b></font></label>
    <input type="text" id="from" name="from" placeholder="Enter your Email.." required>
    
	<label for="from">Reply To Name <font color="red"><b>*</b></font></label>
    <input type="text" id="from" name="replytoname" placeholder="Enter your Name.." required>
    
    <label for="from">Reply To Email <font color="red"><b>*</b></font></label>
    <input type="text" id="from" name="replytoemail" placeholder="Enter your Email.." required>

    <label for="subject">Subject <font color="red"><b>*</b></font></label>
    <input type="text" id="subject" name="subject" placeholder="Enter Subject name here.." required>

   <!-- <label for="message">Message <font color="red"><b>*</b></font></label>
    <textarea id="message" name="message" placeholder="Enter your Message here.." style="height:200px" required></textarea>-->

	<br><br>
    <input type="submit" value="Send">
  </form>
</div>
</body>
</html>
