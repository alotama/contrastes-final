<?
/*
!Simple function for create HTML head and SEO markup
!v1.0 @ 2018-05-02

@param $Title -> string -> Title for the page/document
@param $Description -> string -> Description for the page
@param OPTIONAL $OGP -> string -> Set the OGP image path, if not defined the function will use the default OGP image
*/
function SEO_and_HEAD($Title, $Description, $OGP = "DEFAULT") {
	//Check is is set title and description
	if (isset($Title) && isset($Description)) {

		//Default color for webapp bar (Chrome)
		$WebApp_Color = "#000000";

		//Define the company name for author and copyright tags
		$Company_Name = "Tama. Sebastian. | alotama";

		//Set favicons path
		$Favicon_Path = WEBSITE_URL."/assets/img/favicon";

		$Title = trim($Title);
		$Description = trim($Description);

		//Get current URL
		$URL = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		//
		if ($OGP == "DEFAULT") {
			$OGP_Image = WEBSITE_URL."/assets/img/og.png";
		} else {
			$OGP_Image = $OGP;
		}

	//Get current year for copyright
	$current_year = date("Y");
?>
<title><?= $Title; ?></title>

<!-- SEO -->
	<!-- HTML -->
    <link rel="image_src" id="head_image_src" type="image/png" href="<?= $OGP_Image; ?>" />
    <meta name="author"                    content="<?= $Company_Name; ?>" />
    <meta name="description"               content="<?= $Description; ?>" />
    <meta name="robots"                    content="ALL" />
    <meta name="googlebot"                 content="ALL, follow" />
    <link rel="canonical"                  href="<?= $URL; ?>" />
    <!-- END: HTML -->
	<!-- OG -->
    <meta property="og:title"              content="<?= $Title; ?>" />
    <meta property="og:url"                content="<?= $URL; ?>" />
    <meta property="og:site_name"          content="<?= $Company_Name; ?>" />
    <meta property="og:description"        content="<?= $Description; ?>" />
    <meta property="og:locale"             content="es_AR" />
    <meta property="og:locale:alternate"   content="es_ES" />
    <meta property="og:image:url"          content="<?= $OGP_Image; ?>" />
    <meta property="og:image:width"        content="1200" />
    <meta property="og:image:height"       content="630" />
    <!-- END: OG -->
    <!-- DCMI -->
    <meta name="dcterms.rights"            content="Copyright <?= $current_year; ?> <?= $Company_Name; ?>" />
    <meta name="dcterms.dateCopyrighted"   content="<?= $current_year; ?>" />
    <meta name="DC.Language"               content="es_AR" />
    <meta name="geo.region"                content="AR-C" />
    <!-- END: DCMI -->
<!-- END: SEO -->

<!-- Web App -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable"       content="yes" />
<meta name="apple-mobile-web-app-title"   content="<?= $Title; ?>">
<meta name="application-name"             content="<?= $Title; ?>">
<meta name="msapplication-TileColor"      content="<?= $WebApp_Color; ?>" />
<meta name="theme-color"                  content="<?= $WebApp_Color; ?>" />
<!-- END: Web App -->

<!-- UA and Viewport -->
<meta http-equiv="X-UA-Compatible"        content="Chrome=1" />
<meta http-equiv="X-UA-Compatible"        content="IE=edge" />
<meta http-equiv="X-UA-Compatible"        content="IE=EmulateIE7" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<!-- END: UA and Viewport -->

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="" href="<?= $Favicon_Path; ?>/apple-icon.png">
<link rel="apple-touch-icon" sizes="57x57" href="<?= $Favicon_Path; ?>/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?= $Favicon_Path; ?>/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= $Favicon_Path; ?>/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?= $Favicon_Path; ?>/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= $Favicon_Path; ?>/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?= $Favicon_Path; ?>/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?= $Favicon_Path; ?>/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?= $Favicon_Path; ?>/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= $Favicon_Path; ?>/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?= $Favicon_Path; ?>/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="144x144"  href="<?= $Favicon_Path; ?>/android-icon-144x144.png">
<link rel="icon" type="image/png" sizes="96x96"  href="<?= $Favicon_Path; ?>/android-icon-96x96.png">
<link rel="icon" type="image/png" sizes="72x72"  href="<?= $Favicon_Path; ?>/android-icon-72x72.png">
<link rel="icon" type="image/png" sizes="48x48"  href="<?= $Favicon_Path; ?>/android-icon-48x48.png">
<link rel="icon" type="image/png" sizes="36x36"  href="<?= $Favicon_Path; ?>/android-icon-36x36.png">
<meta name="msapplication-TileImage" content="<?= $Favicon_Path; ?>/ms-icon-144x144.png">
<meta name="msapplication-TileImage" content="<?= $Favicon_Path; ?>/ms-icon-70x70.png">
<link rel="shortcut icon" href="<?= WEBSITE_URL; ?>/favicon.ico" type="image/ico" />
<!-- END: Favicons -->

<!-- General styles -->
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400i,400,700|Frank+Ruhl+Libre:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="<?= WEBSITE_URL; ?>/assets/css/general.min.css" type="text/css" rel="stylesheet">
<!-- END: General styles -->
<?
	}
}
?>
