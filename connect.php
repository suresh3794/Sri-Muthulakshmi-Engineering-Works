<?php

   print_r($_GET);
   if (isset($_GET['yourName'])){

	$yourName = $_GET['yourName'];
    $yourEmail = $_GET['yourEmail'];
    $phone = $_GET['phone'];
    
	$link=mysqli_connect('sql12.freesqldatabase.com','sql12600926','Qu5e3JJSLq','sql12600926');
	if(!$link){
		die('Connection Failed : '. mysqli_connect_error());
	} 
		
	$query="INSERT INTO contact(yourName,yourEmail,phone) values('$yourName','$yourEmail',$phone)";
	$result=mysqli_query($link, $query);

	if($result){
        
        echo '<script language="javascript">';
        echo 'alert("Your Message successfully sent, we will get back to you ASAP.");';
        echo 'window.location.href="index.html";';
        echo '</script>';        
       
	}else{
		echo 'Error';
	}

}
    ?>