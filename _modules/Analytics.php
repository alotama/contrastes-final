<?php
class Analytics {
	//Get the required data from "Global_Get_Environment.php"
	protected static $GOOGLE_ANALYTICS_ID = GOOGLE_ANALYTICS_ID;
	protected static $GOOGLE_TAG_MANAGER_ID = GOOGLE_TAG_MANAGER_ID;
	protected static $FACEBOOK_PIXEL_ID = FACEBOOK_PIXEL_ID;
	protected static $LINKEDIN_PIXEL_ID = LINKEDIN_PIXEL_ID;

	/////////////////// /////////////////// ///////////////////

	//Google Analytics
    final public function Add_Google_Analytics() {
		if (isset(self::$GOOGLE_ANALYTICS_ID) && !empty(self::$GOOGLE_ANALYTICS_ID)) {
		?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= self::$GOOGLE_ANALYTICS_ID; ?>"></script>
<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', '<?= self::$GOOGLE_ANALYTICS_ID; ?>');</script>
<?
    	}
	}

	/////////////////// /////////////////// ///////////////////

	//Google Tag Manager for HEAD tag
    final public function Add_Google_Tag_Manager_HEAD() {
		if (isset(self::$GOOGLE_TAG_MANAGER_ID) && !empty(self::$GOOGLE_TAG_MANAGER_ID)) {
		?>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?= self::$GOOGLE_TAG_MANAGER_ID; ?>');</script>
<?
    	}
	}

	/////////////////// /////////////////// ///////////////////

	//Google Tag Manager for BODY tag
    final public function Add_Google_Tag_Manager_BODY() {
		if (isset(self::$GOOGLE_TAG_MANAGER_ID) && !empty(self::$GOOGLE_TAG_MANAGER_ID)) {
		?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= self::$GOOGLE_TAG_MANAGER_ID; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?
    	}
	}

	/////////////////// /////////////////// ///////////////////

	//Facebook Pixel
    final public function Add_Facebook_Pixel() {
		if (isset(self::$FACEBOOK_PIXEL_ID) && !empty(self::$FACEBOOK_PIXEL_ID)) {
		?>
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?= self::$FACEBOOK_PIXEL_ID; ?>');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?= self::$FACEBOOK_PIXEL_ID; ?>&ev=PageView&noscript=1"
/></noscript>
<?
    	}
	}

	/////////////////// /////////////////// ///////////////////

	//Linkedin Pixel
    final public function Add_Linkedin_Pixel() {
		if (isset(self::$LINKEDIN_PIXEL_ID) && !empty(self::$LINKEDIN_PIXEL_ID)) {
		?>
<script type="text/javascript">
_linkedin_data_partner_id = "<?= self::$LINKEDIN_PIXEL_ID; ?>";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<?
    	}
	}
}
