<?php 
include 'config.php';

// Retrieve username and password from database according to user's input
$email=mysqli_real_escape_string($db,$_POST['email']);
$password=mysqli_real_escape_string($db,$_POST['pass']);
$encrypted_mypassword=md5($password);
$sql = "SELECT * FROM user WHERE (email = '$email') and (password = '$encrypted_mypassword') AND accountStatus = 1";
$login = mysqli_query($db,$sql);
$count = mysqli_num_rows($login) ;

if ($count != "") {
    while($row = mysqli_fetch_assoc($login)){
        $_SESSION['sid'] = $row['id']; //staff id
        $sid = $row['id'];
        $_SESSION['usertype'] =$row['userType'];
        $_SESSION['name'] = $row['name'];
        $type = $row['userType']; 
    }

	if($type == 1) {
        $str = '../admin';
        redirect($str); 

    }else if ($type == 2){

        $str = '../user';
        redirect($str); 

    }else if ($type == 3){
        
        $str = '../accountant';
        redirect($str);

    }	
				
		
}
else {
    $str = '../main.php?s=lf';
    redirect($str); 
}   



?>