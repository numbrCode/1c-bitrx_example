<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)	die();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!--<title>X-Corporation</title>-->
		<title><? $APPLICATION->ShowTitle(); ?></title>

		<link rel="icon" href="<?=SITE_TEMPLATE_PATH;?>/ico/favicon.ico">

	<? $APPLICATION->ShowHead(); ?>

	<? use Bitrix\Main\Page\Asset; // D7 ?>

	<!-- web-fonts -->
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/com_local/fonts.googleapis.com/css/roboto_400_700_500.css"); ?>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/com_local/fonts.googleapis.com/css/montserrat_400_700.css"); ?>

	<!-- off-canvas -->
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/mobile-menu.css"); ?>
		
	<!-- font-awesome -->
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/fonts/font-awesome/css/font-awesome.min.css"); ?>
		
	<!-- Bootstrap -->
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/com_local/maxcdn.bootstrapcdn.com/bootstrap/css/bootstrap.min.css"); ?>

	<!-- Style CSS -->
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css"); ?>


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<? Asset::getInstance()->addString('<script src="'.SITE_TEMPLATE_PATH.'/com_local/oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>'); ?>
		<? Asset::getInstance()->addString('<script src="'.SITE_TEMPLATE_PATH.'/com_local/oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>'); ?>
	<![endif]-->

</head>
<body>

	<? $APPLICATION->ShowPanel(); ?>

<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

	<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_left", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "top_left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	),
	false
);?>
