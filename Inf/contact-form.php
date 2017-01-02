<?php

$text1 =$_POST['inputMessage'];
$text2 =$_POST['inputName'];
$text3 =$_POST['inputSubject'];

$text1 = $text1 . " " . $text2;

if ((mail("",$text3,$text1)) && (mail("",$text3,$text1)) )  {

	$data = array('success' => true, 'message' => 'Thanks! We have received your message.');
	echo json_encode($data);
	return;
}


$data = array('success' => false, 'message' => 'Error occured');
echo json_encode($data);


?>

