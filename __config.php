<?php
//-----------------------------------------------------------------
define ("__ROOT__", "https://www.nealesdrt.co.uk/");
define("FIRM_NAME", "Neales Transfers");
define ("__TEST_EMAIL_ADDR","eric.masaba@gmail.com");
define ("__TEST_EMAIL_ADDR2","abrar.hussain-hw@gmail.com");

define("FIRM_EMAIL_BOOKING","bookings@nealesdrt.co.uk");
define("FIRM_CODE","nft");
define("FIRM_EMAIL_ADDR","info@nealesdrt.co.uk");
define("FIRM_NUMBER","441494522555");
define("FIRM_VOICE","441494372");
define("FIRM_SMS","441494372860");
define("FIRM_DEFAULT_EMAIL","nealesdrt@gmail.com");
define("FIRM_URL","http://www.nealesdrt.co.uk");

define('__DBNAME__' , 'masabaer_nealesdrt');
define('__DBUSERNAME__' , 'masabaer_abrar');
define('__DBPASSWORD__' , 'T[da4+fIbzb#');


$services = array(	"pickup",    "cancel",    "airport",    "school");

/*
 AWS User: ses-smtp-user.20150810-173137
SMTP Username: AKIAITLTKO4HMHTA5ZCA
SMTP Password: Ag7+aivrkYOvmYaDb1+22FRQ1qrgEhjUlbPJEL3pJwLg
*/

/*AQL*/
define("SMS_API_USERNAME1","nealesdrt");
define("SMS_API_PASSWORD1","gooba");
define("SMS_API_USERNAME2","nealesdrt");
define("SMS_API_PASSWORD2","gooba");

/*AWS SMTP*/
// define("SMTP_AUTHUSERNAME", "AKIAIRKLTF24OCEP25VA");
// define("SMTP_AUTHPASSWORD","Ag7+aivrkYOvmYaDb1+22FRQ1qrgEhjUlbPJEL3pJwLg");
define("SMTP_AUTHUSERNAME","AKIAJRSZDHUOOROKILXQ");
define("SMTP_AUTHPASSWORD","AsRdJs9hVkn9bQxQ7sSqds3gVNZ+Y3l+glLVWdiUytc9");
define("SMTP_PORT","587");
define("SMTP_HOST","email-smtp.eu-west-1.amazonaws.com");

/*STRIPE*/
define('STRIPE_LIVE_SECRET_KEY', '');
define('STRIPE_LIVE_PUBLISHABLE_KEY', '');
define('STRIPE_TEST_SECRET_KEY', 'sk_test_');
define('STRIPE_TEST_PUBLISHABLE_KEY', 'pk_test_');

/*INVOICE TYPES*/
define("BILLTYPE_QUOTE", 0);
define("BILLTYPE_INVOICE", 1);
define("BILLTYPE_RECEIPT", 2);

// DB Connection
$dbname = __DBNAME__;
$dbusername = __DBUSERNAME__;
$dbpassword = __DBPASSWORD__ ;
$databaseName = __DBNAME__;

$smsAPIusername = SMS_API_USERNAME1;
$smsAPIpassword = SMS_API_PASSWORD1;

$debug = 0;
$hostname ="localhost";
$conn= "";

$host = SMTP_HOST;//"email-smtp.eu-west-1.amazonaws.com";
$port = "587";
$firmSMTPAuthUsername = "AKIAITLTKO4HMHTA5ZCA";
$firmSMTPAuthpassword = "Ag7+aivrkYOvmYaDb1+22FRQ1qrgEhjUlbPJEL3pJwLg"; 

$firmName = FIRM_NAME; 
$firmEmail = FIRM_EMAIL_ADDR;

$firmInvoice = (!empty($_GET["invoice"])) ? htmlspecialchars($_GET["invoice"]): "#0001" ;
$firmURL = FIRM_URL;
$firmCSS = FIRM_URL."/css/invoice.css";
$firmLogo = FIRM_URL. "/assets/img/logo.png";


// SERVERS & AUTH;
$host = "smtp.live.com";
$port = "587";
$firmSMTPAuthUsername = "nealestransport@outlook.com";
$firmSMTPAuthpassword = "tmznklcwqmvlqssc"; 

$host = "email-smtp.eu-west-1.amazonaws.com";//"ses-smtp-user.20150624-225517";
$firmSMTPAuthUsername = "AKIAIRKLTF24OCEP25VA";
$firmSMTPAuthpassword = "Auj+LN2o1DS54VDVeNygnAUslbtaPP22vd6hMEauz1KJ";

//-----------------------------------------------------------------
$firmName = "Neales DRT";
$firmEmail = "bookings@nealesdrt.co.uk";
$firmInvoice = (!empty($_GET["invoice"])) ? htmlspecialchars($_GET["invoice"]): "#0001" ;
//------------------------------------------
$firmCSS = "/css/invoice.css";
$firmURL = __ROOT__; // "http://www.nealesdrt.co.uk/main/home.php";
$firmLogo = "/assets/img/neales-n-icon.png";
$firmLogo = "/assets/img/nealesnarrow.png";
//------------------------------------------
$firmAddressLine1 = "6 – 8 Corporation Street";
$firmAddressLine2 = "High Wycombe";
$firmAddressLine3 = "BUCKS";
$firmAddressLine4 = "UK";
$firmPostCode = "HP13 6TQ";
//------------------------------------------
$firmBookingAgentTitle = "Automated Booking";
$firmClientID = FIRM_URL . "/contact";
$firmEmailBooking = "bookings@nealesdrt.co.uk";
$firmEmailSupport = "bookings@nealesdrt.co.uk";
$firmReplyTo = "bookings@nealesdrt.co.uk"; 
//------------------------------------------
$firmNumber = "441494372860";
$firmBooking= "441494522555";
$firmMobile = "441494372860";
//------------------------------------------
// Banking Details
$firmIBAN = "GB11LOYD30942855663868";
$firmSWIFT = "LOYDGB11";
$firmSortcode = "30-94-28";
$firmAccountNumber = "55663868";
$firmBank = "ROYAL BANK OF SCOTLAND";
$firmAccountName = "NEALES COACHES LTD";
$firmLegalName = "NEALES COACHES LTD";
$founded = "1975";
$currentYear = $date1=date('Y');
//-----------------------------------------------------------------

?>
