<?php
session_start();

require_once('settings.php');
require_once('google-login-api.php');
require_once('User.php');
// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);
		$user=new User();
		$gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $user_info['id'],
        'first_name'    => $user_info['name']['givenName'],
        'last_name'     => $user_info['name']['familyName'],
        'email'         => $user_info['emails']['0']['value'],
        'gender'        => $user_info['gender'],
       'locale'        => $user_info['language'],
        'picture'       => $user_info['image']['url'],
        'link'          => $user_info['url']
    );
    $userData = $user->checkUser($gpUserData);
	
	//Storing user data into session
    $_SESSION['userData'] = $userData;
	
		//echo '<pre>';print_r($gpUserData); echo '</pre>';
		//echo '<pre>';print_r($user_info); echo '</pre>';
		// Now that the user is logged in you may want to start some session variables
	$_SESSION['logged_in'] = 1;

		// You may now want to redirect the user to the home page of your website
		 header('Location:../main.php');
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}

?>