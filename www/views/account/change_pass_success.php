<?php
if (!defined('BASEPATH')) exit('<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><title>Acceso prohibido!</title><style type="text/css"><!--/*--><![CDATA[/*><!--*/body{color:#000000;background-color:#FFFFFF;}a:link{color:#0000CC;}p,address{margin-left:3em;}span{font-size: smaller;}/*]]>*/--></style></head><body><h1>Acceso prohibido!</h1><h2>Error 403</h2><p>Usted no tiene permiso de accesar al objeto solicitado. El objeto est&aacute; protegido contra lectura, o no puede ser leido por el servidor.</p></body></html>');
/**********************************************************************************
*	
*		FireTail CMS
* 		-------------------------------------------------------------------
*		Autor		:	Frozen Team
*		Copyright	: 	Copyright (C) 2012, Frozen Team
*		Licencia	:	GNU GPL v3
*		Link		: 	http://github.com/FrozenTeam/
*		--------------------------------------------------------------------
*
**********************************************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<title>Cambiar contrase&ntilde;a - Battle.net</title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/images/favicons/bam.ico" type="image/x-icon"/>
<link rel="search" type="application/opensearchdescription+xml" href="http://us.battle.net/es-es/data/opensearch" title="B&uacute;squeda eb Battle.net" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/css/common.css?v38" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/css/common-ie.css?v38" />
<![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/css/common-ie6.css?v38" />
<![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/css/common-ie7.css?v38" />
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/bnet.css?v24" />
<link rel="stylesheet" type="text/css" media="print" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/bnet-print.css?v24" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/inputs.css?v24" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/inputs-ie6.css?v24" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/inputs-ie.css?v24" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/management/settings.css?v24" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/bnet-ie.css?v24" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/bnet-ie6.css?v24" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/bnet-ie7.css?v24" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/css/locale/es-es.css?v38" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/css/locale/es-es.css?v24" />
<script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/js/third-party/jquery.js?v38"></script>
<script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/js/core.js?v38"></script>
<script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/js/tooltip.js?v38"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = '/account';
Core.sharedStaticUrl= '<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common';
Core.baseUrl = '/account';
Core.projectUrl = '/account';
Core.cdnUrl = 'http://us.media.blizzard.com';
Core.supportUrl = 'http://us.battle.net/support/';
Core.secureSupportUrl= 'https://us.battle.net/support/';
Core.project = 'bam';
Core.locale = 'es-es';
Core.language = 'es';
Core.buildRegion = 'us';
Core.region = 'us';
Core.shortDateFormat= 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = true;
Flash.videoPlayer = 'http://us.media.blizzard.com/global-video-player/themes/bam/video-player.swf';
Flash.videoBase = 'http://us.media.blizzard.com/bam/media/videos';
Flash.ratingImage = 'http://us.media.blizzard.com/global-video-player/ratings/bam/es-es.jpg';
Flash.expressInstall= 'http://us.media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.blizzard.net']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);
//]]>
</script>
</head>
<body class="es-es logged-in">
<div id="layout-top">
<div class="wrapper">
<div id="header">
<h1 id="logo"><a href="http://us.battle.net/" tabindex="50" accesskey="h">Battle.net</a></h1>
<div id="navigation">
<div id="page-menu" class="large">
<h2><a href="<?php echo "".$path."/index.php"; ?>/account/management/"> Inicio
</a></h2>
<ul>
<li>
<a href="<?php echo "".$path."/index.php"; ?>/account/management/" class="border-3">Resumen</a>
<span class="arrow"></span>
</li>
<li class="active">
<a href="#" class="border-3 menu-arrow" onclick="openAccountDropdown(this, 'settings'); return false;">Configuraci&oacute;n</a>
<span class="arrow"></span>
<div class="flyout-menu" id="settings-menu" style="display: none">
<ul>
<li><a href="<?php echo "".$path."/index.php"; ?>/account/settings/change-username">Cambiar nombre de cuenta</a></li>
<li><a href="<?php echo "".$path."/index.php"; ?>/account/settings/change-password">Cambiar contrase&ntilde;a</a></li>
<li><a href="account/management/settings/change-communication.html">Preferencias de comunicaci&oacute;n</a></li>
<li><a href="account/parental-controls/index.html">Mi historial</a></li>
</ul>
<!--[if IE 6]>&nbsp;
<iframe id="settings-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 0; width: 200px; height: 220px; z-index: -1;"></iframe>
<script type="text/javascript">
//<![CDATA[
(function(){
var doc = document;
var shim = doc.getElementById('settings-shim');
shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
shim.style.display = 'block';
})();
//]]>
</script>
<![endif]-->
</div>
</li>
<li>
<a href="#" class="border-3 menu-arrow" onclick="openAccountDropdown(this, 'games'); return false;">Servicios</a>
<span class="arrow"></span>
<div class="flyout-menu" id="games-menu" style="display: none">
<ul>
<li><a href="account/management/add-game.html">Administrar mi cuenta</a></li>
<li><a href="account/management/wow-account-conversion.html">Tienda del servidor</a></li>
<li><a href="account/management/download/">Descargar clientes de juego</a></li>
</ul>
</div>
</li>
<li>
<a href="#" class="border-3 menu-arrow transaction" onclick="openAccountDropdown(this, 'activity'); return false;">Historial de Cuenta
</a>
<span class="arrow"></span>
<div class="flyout-menu" id="activity-menu" style="display: none">
<ul>
<li><a href="account/management/orders.html">Historial de conexiones</a></li>
<li><a href="account/management/orders.html">Historial de cambios en la cuenta</a></li>
<li><a href="account/management/orders.html">Historial de votos</a></li>
<li><a href="account/management/transaction-history.html">Historial de donativos</a></li>
<li><a href="account/management/orders.html">Historial en la tienda</a></li>
</ul>
</div>
</li>
<li>
<a href="account/management/authenticator.html" class="border-3">Seguridad de Cuenta</a>
<span></span>
</li>
<li class="account-balance" id="accountBalanceCenter" data-tooltip-options='{"location": "mouse"}'>
<a href="#" class="border-3 menu-arrow title" onclick="openAccountDropdown(this, 'accountBalance'); return false;">
<span class="sub-title">Saldo:</span><br/>
<?php echo "<span class=\"balance\" id=\"primary-balance\">".$coins." Monedas</span>"; ?>
</a>
<div class="flyout-menu" id="accountBalance-menu">
<ul>
<li class=" first nonBeta"><a href="https://us.battle.netaccount/management/ebalance-purchase.html">Realizar Donativo</a></li>
<li class=" "><a href="account/management/transaction-history.html">Historial de donativos</a></li>
<li class="line nonBeta"><a href="#" onclick="$('#account-balance-dialog').dialog('open'); return false;">Tienda de Monedas</a></li>
<li class="nonBeta"><a href="http://eu.battle.net/support/es-es/article/battle-net-balance-faq">Ayuda</a></li>
</ul>
</div>
</li>
</ul>
<span class="clear"><!-- --></span>
</div>
<div class="account-balance-dialog" style="display: none" id="account-balance-dialog" >
Un tipo de moneda no puede convertirse a otro tipo de moneda, y algunas monedas pueden no estar disponibles para ciertas regiones. Por ejemplo, un saldo de cuenta en d&oacute;lares americanos puede ser usado &uacute;nicamente en la p&aacute;gina web regional norteamericana (us.battle.net). <a href="http://eu.battle.net/support/es-es/article/battle-net-balance-faq">M&aacute;s informaci&oacute;n</a><br/>
<br/>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
$('.account-balance-dialog').dialog({
autoOpen: false,
modal: true,
position: "center",
resizeable: false,
closeText: "Cerrar",
buttons: {
'Ok': function() {
$(this).dialog("close");
}
},
open: function() {
$(".ui-dialog-buttonpane").find("button").addClass("button1").find(":first").addClass("first");
if(Core.browser=="ie6" || Core.browser=="ie7" || Core.browser=="ie8"){
$(".ui-widget-overlay").css("opacity", 0.8);
}
}
});
});
//]]>
</script>
<span class="clear"></span>
</div>
</div>
<div id="service">
<ul class="service-bar">
<li class="service-cell service-home"><a href="http://us.battle.net/" tabindex="50" accesskey="1" title="Battle.net">&nbsp;</a></li>
<?php
if($logged_in != TRUE)
{
echo '<li class="service-cell service-welcome">
<a href="?login" onClick="return Login.open()">Inicia sesión</a> o <a href="'.$path.'/index.php/account/register">Crea una cuenta</a>
</li>';
} else {
echo'<li class="service-cell service-welcome">
Bienvenido(a), '.$username.'
 |  <a href="'.$path.'/index.php/account/logout" tabindex="50" accesskey="2">desconectar</a>
</li>';
}
?>
<li class="service-cell service-account"><a href="https://us.battle.netaccount/management/" class="service-link" tabindex="50" accesskey="3">Cuenta</a></li>
<li class="service-cell service-support service-support-enhanced">
<a href="#support" class="service-link service-link-dropdown" tabindex="50" accesskey="4" id="support-link" onclick="return false" style="cursor: progress" rel="javascript">Asistencia<span class="no-support-tickets" id="support-ticket-count"></span></a>
<div class="support-menu" id="support-menu" style="display:none;">
<div class="support-primary">
<ul class="support-nav">
<li>
<a href="http://us.battle.net/support/" tabindex="55" class="support-category">
<strong class="support-caption">Art&iacute;culos de asistencia</strong>
Explorar base de datos
</a>
</li>
<li>
<a href="https://us.battle.net/support/ticket/status" tabindex="55" class="support-category">
<strong class="support-caption">Tus consultas</strong>
Ver historial completo de tus consultas
</a>
<div class="ticket-summary" id="ticket-summary"></div>
</li>
</ul>
<span class="clear"><!-- --></span>
</div>
<div class="support-secondary"></div>
<!--[if IE 6]> <iframe id="support-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 9px; width: 297px; height: 400px; z-index: -1;"></iframe>
<script type="text/javascript">
//<![CDATA[
(function(){
var doc = document;
var shim = doc.getElementById('support-shim');
shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
shim.style.display = 'block';
})();
//]]>
</script>
<![endif]-->
</div>
</li>
<li class="service-cell service-explore">
<a href="#explore" tabindex="50" accesskey="5" class="dropdown" id="explore-link" onclick="return false" style="cursor: progress" rel="javascript">Explorar</a>
<div class="explore-menu" id="explore-menu" style="display:none;">
<div class="explore-primary">
<ul class="explore-nav">
<li>
<a href="http://us.battle.net/" tabindex="55" data-label="Home">
<strong class="explore-caption">Battle.net</strong>
Conecta. Juega. Une.
</a>
</li>
<li>
<a href="https://us.battle.netaccount/management/" tabindex="55" data-label="Account">
<strong class="explore-caption">Cuenta</strong>
Gestiona tu cuenta
</a>
</li>
<li>
<a href="http://us.battle.net/support/" tabindex="55" data-label="Support">
<strong class="explore-caption">Asistencia</strong>
Consigue asistencia
</a>
</li>
<li>
<a href="https://us.battle.netaccount/management/get-a-game.html" tabindex="55" data-label="Buy Games">
<strong class="explore-caption">Comprar juegos</strong>
Juegos en soporte digital para descargar
</a>
</li>
</ul>
<div class="explore-links">
<h2 class="explore-caption">M&aacute;s</h2>
<ul>
<li><a href="http://us.battle.net/what-is/" tabindex="55" data-label="More">&iquest;Qu&eacute; es Battle.net?</a></li>
<li><a href="https://us.battle.netaccount/parental-controls/index.html" tabindex="55" data-label="More">Control paterno</a></li>
<li><a href="http://us.battle.net/security/" tabindex="55" data-label="More">Seguridad de cuentas</a></li>
<li><a href="https://us.battle.netaccount/management/add-game.html" tabindex="55" data-label="More">A&ntilde;adir juego</a></li>
<li><a href="https://us.battle.netaccount/support/password-reset.html" tabindex="55" data-label="More">&iquest;No puedes iniciar sesi&oacute;n?</a></li>
<li><a href="https://us.battle.netaccount/download/" tabindex="55" data-label="More">Descarga de juegos</a></li>
<li><a href="https://us.battle.netaccount/management/redemption/redeem.html" tabindex="55" data-label="More">Canjear c&oacute;digo de promoci&oacute;n</a></li>
<li><a href="http://us.battle.net/games/classic" tabindex="55" data-label="More">Juegos cl&aacute;sicos</a></li>
</ul>
</div>
<span class="clear"><!-- --></span>
<!--[if IE 6]> <iframe id="explore-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 9px; width: 409px; height: 400px; z-index: -1;"></iframe>
<script type="text/javascript">
//<![CDATA[
(function(){
var doc = document;
var shim = doc.getElementById('explore-shim');
shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
shim.style.display = 'block';
})();
//]]>
</script>
<![endif]-->
</div>
<ul class="explore-secondary">
<li class="explore-game explore-game-sc2">
<a href="http://us.battle.net/sc2/" tabindex="55" data-label="Game - sc2">
<span class="explore-game-inner">
<strong class="explore-caption">StarCraft II</strong>
<span>Noticias y Foros</span> <span>Gu&iacute;a para principiantes</span> <span>Perfil de jugador</span> <span>…</span>
</span>
</a>
</li>
<li class="explore-game explore-game-wow">
<a href="http://us.battle.net/wow/" tabindex="55" data-label="Game - wow">
<span class="explore-game-inner">
<strong class="explore-caption">World of Warcraft</strong>
<span>Perfil de personaje</span> <span>Noticias y Foros</span> <span>Gu&iacute;a de juego</span> <span>…</span>
</span>
</a>
</li>
<li class="explore-game explore-game-d3">
<a href="http://us.battle.net/d3/" tabindex="55" data-label="Game - d3">
<span class="explore-game-inner">
<strong class="explore-caption">Diablo III</strong>
<span>Gu&iacute;a de juego</span> <span>Noticias sobre la beta</span> <span>Foros</span> <span>…</span>
</span>
</a>
</li>
</ul>
</div>
</li>
</ul>
<div id="warnings-wrapper">
<!--[if lt IE 8]> <div id="browser-warning" class="warning warning-red">
<div class="warning-inner2">
No est&aacute;s utilizando la &uacute;ltima versi&oacute;n de tu navegador.<br />
<a href="http://us.blizzard.com/support/article/browserupdate">Actualizar</a> o <a href="http://www.google.com/chromeframe/?hl=es-ES" id="chrome-frame-link">instalar Google Chrome Frame</a>.
<a href="#close" class="warning-close" onclick="App.closeWarning('#browser-warning', 'browserWarning'); return false;"></a>
</div>
</div>
<![endif]-->
<!--[if lt IE 8]> <script type="text/javascript" src="account/local-common/js/third-party/CFInstall.min.js?v38"></script>
<script type="text/javascript">
//<![CDATA[
$(function() {
var age = 365 * 24 * 60 * 60 * 1000;
var src = 'https://www.google.com/chromeframe/?hl=es-ES';
if ('http:' == document.location.protocol) {
src = 'http://www.google.com/chromeframe/?hl=es-ES';
}
document.cookie = "disableGCFCheck=0;path=/;max-age="+age;
$('#chrome-frame-link').bind({
'click': function() {
App.closeWarning('#browser-warning');
CFInstall.check({
mode: 'overlay',
url: src
});
return false;
}
});
});
//]]>
</script>
<![endif]-->
<noscript>
<div id="javascript-warning" class="warning warning-red">
<div class="warning-inner2">
Debes tener activado JavaScript para utilizar esta p&aacute;gina.
</div>
</div>
</noscript>
</div>
</div>
</div>
</div>
<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div class="alert-page">
<div class="alert-page-message success-page">
<p class="text-green title"><strong>&iexcl;Perfecto!</strong></p>
<p class="caption">Tus preferencias han sido cambiadas correctamente.</p>
<p class="caption"><a href="<?php echo "".$path."/index.php/account/management" ?>">Volver a Gesti&oacute;n de cuentas</a></p>
</div>
</div>
</div>
</div>
</div>
<div id="layout-bottom">
<div class="wrapper">