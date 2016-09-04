<?php

require_once 'autoload.php';

use Page\Page;
use Page\SimpleNotepad;
use Page\SecuredNotepad;
use Page\ElectronicSecuredNotepad;

$error = [];
$password = null;
$password2 = null;
$choices = null;
$page = new Page("my forest","gosho obicha megi 23");
$page1 = new Page("sdf","123");
if (empty($_POST["userTwo"])) {
	$error[]= "empty password";
} else {
	$password = $_POST["user2"];
	$choices = $_POST["choices"];
}
$electronic = new ElectronicSecuredNotepad("iana");
$electronic->addPage($page1);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<form method= post  >
<input type = text name ="user2">
<select name = "choices">
<option value = "addPage">Add Page</option>
<option value= "addText">add Text</option>
<option value = "changeText">change Text</option>
<option value = "deleteText">delete Text</option>
</select>
<input type= "submit">
</form>
<?php if(empty($error)): ?>
    <p> <?php  echo "dont have error";?></p>    
    <?php  $password2 = $electronic->getPassWord();?>
    
     <?php if ($choices == "addPage" && $password == $password2):?>
    		 <p> <?php print_r($electronic->addPage($page));?>
     <?php  endif;?>
     
      <?php if (($choices == "addText") && ($password == $password2)):?>
	      <?php   $electronic->addText(0, "kikimora");?>
	       <p> <?php print_r($electronic);?></p>
      <?php  endif;?>
     
      <?php if (($choices == "changeText") && ($password == $password22)):?>
	      <?php   $electronic>changeText(0, "onufri");?>
	       <p> <?php print_r($electronic);?></p>
      <?php  endif;?>   
       
            <?php if (($choices == "deleteText") && ($password == $password2)):?>
	      <?php   $electronic>deleteText(0);?>
	       <p> <?php print_r($electronic);?></p>
      <?php  endif;?>   
      <?php   endif; ?>
      
    <?php  if(!empty($error)):?>
    <?php for ($i = 0 ; $i <count($err); $i++):?>
    <p> <?php echo $error[$i];?></p>
    <?php  endfor;?>
    <?php  endif;?>
