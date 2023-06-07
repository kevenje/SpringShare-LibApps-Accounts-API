<?PHP
//Get LibApps account information for one user
//This uses API Endpoints v1.1 - Accounts (Depracated), most current is v1.2
$accountID = 1234; //libapps -> Admin -> Manage Accounts
$key = ''; //libguides -> Tools -> API -> Endpoints v1.1 (Deprecated) -> Get Accounts
$siteID = 4321; //libguides -> Tools -> API -> Endpoints v1.1 (Deprecated) -> Get Accounts
$libappsimage = '';
if($libapps != 0){
	$libappsurl = 'https://lgapi-us.libapps.com/1.1/accounts/'.$accountID.'?site_id='.$siteID.'&key='.$key.'&expand=profile';
	$libappsjson = file_get_contents($libappsurl, false, $context);
	$libappsdata = json_decode($libappsjson,true);
	$firstname = $libappsdata[0]['first_name'];
	$lastname = $libappsdata[0]['last_name'];
	$firstinitial = $firstname[0];
	$image = $libappsdata[0]['profile']['image']['url'];
	$pronouns = $libappsdata[0]['profile']['pronouns'];
	$description = $libappsdata[0]['profile']['page']['working'];
	$email = $libappsdata[0]['profile']['connect']['email'];
	$address = $libappsdata[0]['profile']['connect']['address'];
	$phone = $libappsdata[0]['profile']['connect']['phone'];
	$instagram = $libappsdata[0]['profile']['connect']['instagram'];
	$linkedin = $libappsdata[0]['profile']['connect']['linkedin'];
}
echo $image;
echo $firstname.' '.$lastname;
// etc
?>
