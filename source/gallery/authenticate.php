<?phpsession_start();$passcode = "";if(!empty($_POST['pass'])){$passcode = $_POST['pass'];if($passcode == "abcd") //set password here$_SESSION['gallerySession'] = "admin";else if($passcode == "d00m")session_destroy();}else{	echo "<script>window.location.assign('../?p=error6');</script>";}?>