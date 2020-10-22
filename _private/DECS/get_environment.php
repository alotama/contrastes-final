<?
/*
!This file is part of the DECS (Dynamic Environment Configuration System).
!DECS v1.3 @ 2017-07-18

FILE: get_environment.php
*/

date_default_timezone_set('America/Argentina/Buenos_Aires');

//Define project root ********************
define("DOCUMENT_ROOT",$_SERVER['DOCUMENT_ROOT']);

//Get environment configuration file ********************
$config_file = DOCUMENT_ROOT.'/_private/DECS/DECS.ini';
$env_config = parse_ini_file($config_file,true,INI_SCANNER_RAW);

//Get the type of environment selected (the not commented one, if both are uncommented will use development environment)
$env_type = $env_config["environment"]["type"];

if ($env_type == "development") {
	error_reporting(E_ALL);
} else {
	error_reporting(0);
}

//Get the environment section name and adds "_data" in order to get that environment info
$env_selected = $env_type."_data";

//Get the environment info
$env_data = $env_config[$env_selected];

//Get the type of protocol is gonna be use in the URL constructor
if($env_data["secure"] === "yes") {
	$protocol = "https";
} else {
	$protocol = "http";
}

//Get page domain
$domain = $env_data["url"];

//Construct the site URL
$full_url = $protocol."://".$domain;

//Define global variables for all the site ********************
define("WEBSITE_URL",$full_url);
define("WEBSITE_DOMAIN",$domain);
define("DB_HOST",$env_data["db_host"]);
define("DB_USER",$env_data["db_user"]);
define("DB_PWD",$env_data["db_pwd"]);
define("DB_NAME",$env_data["db_name"]);

//Include always ********************
include_once(DOCUMENT_ROOT."/_modules/SEO_and_HEAD.php");

//Include when/where required ********************

//Get header/nav
function include_header() {
	include_once(DOCUMENT_ROOT.'/_modules/view/header.php');
}

function include_logo() {
	include(DOCUMENT_ROOT.'/_modules/view/contrastes-logo.php');
}

function include_dashboard_header() {
	include_once(DOCUMENT_ROOT.'/_modules/view/dashboard_header.php');
}

//Get footer
function include_footer() {
	include(DOCUMENT_ROOT.'/_modules/view/footer.php');
}

function include_dashboard_footer() {
	include_once(DOCUMENT_ROOT.'/_modules/view/dashboard_footer.php');
}


//Include database manager
function include_db_manager() {
	require_once(DOCUMENT_ROOT."/_private/db/manage.php");
}

//Include URL handler
function include_url_handler() {
	require_once(DOCUMENT_ROOT."/_modules/URL.php");
}
