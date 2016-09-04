<?php

require_once 'autoload.php';

use Page\Page;
use Page\SimpleNotepad;
use Page\SecuredNotepad;
use Page\ElectronicSecuredNotepad;



$err = [];
$result = null;
$pass = null;
$pass2 =null;
$choice = null;

$page = new Page("my forest","gosho obicha megi 23");
$page1 = new Page("sdf","123");
$noteS->addPage($page1);

 echo $noteS->searchWord("123").PHP_EOL;
 echo $noteS->printAllPagesWithDigits().PHP_EOL;
if (empty($_POST["user"])) {
   	 $err[]= "empty password";
} else {
	$pass = $_POST["user"];
	$choice = $_POST["choice"];
}
 
$error = [];
$password = null;
$password2 = null;
$choices = null;

if (empty($_POST["userTwo"])) {
	$error[]= "empty password";
} else {
	$password = $_POST["user2"];
	$choices = $_POST["choices"];
}
$electronic = new ElectronicSecuredNotepad("iana");
$electronic->addPage($page);
echo $electronic->start();
$obj = new SecuredNotepad("Aa5aa");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
  <form method= post  >
		<input type = text name ="user">
		<select name = "choice">
		  	<option value = "addPage">Add Page</option>
		  	<option value= "addText">add Text</option>
		  	<option value = "changeText">change Text</option>
		  	<option value = "deleteText">delete Text</option>
		</select>
		<input type= "submit">
	</form>
    <?php if(empty($err)): ?>
    <p> <?php  echo "dont have error";?></p>    
    <?php  $pass2 = $noteS->getPass();?>
    
     <?php if ($choice == "addPage" && $pass == $pass2):?>
    		 <p> <?php print_r($noteS->addPage($page));?>
     <?php  endif;?>
     
      <?php if (($choice == "addText") && ($pass == $pass2)):?>
	      <?php   $noteS->addText(0, "kikimora");?>
	       <p> <?php print_r($noteS);?></p>
      <?php  endif;?>
     
      <?php if (($choice == "changeText") && ($pass == $pass2)):?>
	      <?php   $noteS->changeText(0, "onufri");?>
	       <p> <?php print_r($noteS);?></p>
      <?php  endif;?>   
       
            <?php if (($choice == "deleteText") && ($pass == $pass2)):?>
	      <?php   $noteS->deleteText(0);?>
	       <p> <?php print_r($noteS);?></p>
      <?php  endif;?>   
      <?php   endif; ?>
      
    <?php  if(!empty($err)):?>
    <?php for ($i = 0 ; $i <count($err); $i++):?>
    <p> <?php echo $err[$i];?></p>
    <?php  endfor;?>
    <?php  endif;?>


</body>
</html>