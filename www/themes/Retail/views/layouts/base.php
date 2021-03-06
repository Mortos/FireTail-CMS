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
?><!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head>
	<title><?php echo $template['title']; ?></title>
	<?php echo $template['metadata']; ?>
</head>
<body class="es-es <?php echo $pagina; ?>">

<div id="wrapper">
<div id="header">
<h1 id="logo"><a href="index.html">World of Warcraft</a></h1>
<div class="header-plate">
<ul class="menu" id="menu">
<li class="menu-home">
<a href="<?php echo $path; ?>" <?php ($activo == "index") ? print "class=\"menu-active\"" : print ""; ?>>
<span>Inicio</span>
</a>
</li>
<li class="menu-game">
<a href="<?php echo $path; ?>/index.php/server" <?php ($activo == "server") ? print "class=\"menu-active\"" : print ""; ?>>
<span>Juego</span>
</a>
</li>
<li class="menu-community">
<a href="<?php echo $path; ?>/index.php/community" <?php ($activo == "community") ? print "class=\"menu-active\"" : print ""; ?>>
<span>Comunidad</span>
</a>
</li>
<li class="menu-media">
<a href="<?php echo $path; ?>/index.php/media" <?php ($activo == "media") ? print "class=\"menu-active\"" : print ""; ?>>
<span>Medios</span>
</a>
</li>
<li class="menu-forums">
<a href="<?php echo $path; ?>/index.php/forum" <?php ($activo == "forum") ? print "class=\"menu-active\"" : print ""; ?>>
<span>Foros</span>
</a>
</li>
<li class="menu-services">
<a href="<?php echo $path; ?>/index.php/services" <?php ($activo == "services") ? print "class=\"menu-active\"" : print ""; ?>>
<span>Servicios</span>
</a>
</li>
</ul>
<div class="user-plate">
<?php
if($logged_in != TRUE)
echo sprintf('<a href="?login" class="card-login"
onclick="BnetAds.trackImpression(\'Battle.net Login\', \'Character Card\', \'New\'); return Login.open(\''.$path.'/index.php/account/login\');">
¡<strong>Inicia sesión</strong> para mejorar y personalizar tu experiencia!
</a>'); 
else {
echo '
<div class="card-nochars">
<div class="player-name">'.$username.'</div>
'.$logged_id.' No hay personajes disponibles.
</div>
<div class="card-overlay"></div>
';
}
?>
<div class="card-overlay"></div>
</div>
</div>
</div>
<?php echo $template['body']; ?>
<div id="footer">
<div id="sitemap" class="promotions">
<div class="column">
<h3 class="bnet">
<a href="<?php echo $path; ?>" tabindex="100"><?php echo $server_name; ?></a>
</h3>
<ul>
<li><a href="<?php echo $path; ?>/index.php/what-is">¿Qué es <?php echo $server_name; ?>?</a></li>
<li><a href="<?php echo $path; ?>/index.php/account/register">Crear Cuenta</a></li>
<li><a href="<?php echo $path; ?>/index.php/account/management">Mi Cuenta</a></li>
<li><a href="<?php echo $path; ?>/index.php/support">Asistencia</a></li>
<li><a href="<?php echo $path; ?>/index.php/forum">Foros</a></li>
</ul>
</div>
<div class="column">
<h3 class="games">
<a href="<?php echo $path; ?>/index.php/server" tabindex="100">Servidor</a>
</h3>
<ul>
<li><a href="<?php echo $path; ?>/index.php/server/beginners-guide">Guía de Novatos</a></li>
<li><a href="<?php echo $path; ?>/index.php/server/how-to-connect">Como Conectarme</a></li>
<li><a href="<?php echo $path; ?>/index.php/server/arena-top">Top de Arenas</a></li>
<li><a href="<?php echo $path; ?>/index.php/server/realm-status">Estado de los Reinos</a></li>
<li><a href="<?php echo $path; ?>/index.php/server/patch-server">Parche Actual</a></li>
<li><a href="<?php echo $path; ?>/index.php/server/download-zone">Zona de Descargas</a></li>
</ul>
</div>
<div class="column">
<h3 class="account">
<a href="<?php echo $path; ?>/index.php//account/management/" tabindex="100">Cuenta</a>
</h3>
<ul>
<li><a href="<?php echo $path; ?>/index.php/support/login-support">¿No puedes iniciar sesión?</a></li>
<li><a href="<?php echo $path; ?>/index.php/account/register">Crear cuenta</a></li>
<li><a href="<?php echo $path; ?>/index.php/account/management">Administración de cuenta</a></li>
<li><a href="<?php echo $path; ?>/index.php/account/vote">Votar</a></li>
<li><a href="<?php echo $path; ?>/index.php/account/donate">Donar</a></li>
<li><a href="<?php echo $path; ?>/index.php/store">Tienda</a></li>
</ul>
</div>
<div class="column">
<h3 class="support">
<a href="<?php echo $path; ?>/index.php/support" tabindex="100">Asistencia</a>
</h3>
<ul>
<li><a href="<?php echo $path; ?>/index.php/server/staff">Staff del Servidor</a></li>
<li><a href="<?php echo $path; ?>/index.php/support/new-ticket">Crear Ticket</a></li>
<li><a href="<?php echo $path; ?>/index.php/security/">Protege tu cuenta</a></li>
<li><a href="<?php echo $path; ?>/index.php/security/help">¡Ayuda, me han pirateado!</a></li>
<li><a href="<?php echo $path; ?>/index.php/bug-tracker/report">Reportar Bug</a></li>
<li><a href="<?php echo $path; ?>/index.php/bug-tracker/list">Lista de Bugs</a></li>
</ul>
</div>
<div id="footer-promotions">
<div class="sidebar-content"></div>
<div id="sidebar-marketing" class="sidebar-module">
<div class="bnet-offer">
<!-- -->
<?php foreach($announce as $announce_item):
		echo sprintf('
		<div class="bnet-offer-bg">
				<a href="'.$announce_item['link'].'" target="_blank" id="'.$announce_item['id'].'" class="bnet-offer-image">
				<img src="'.$path.'/'.APPPATH.'themes/'.$theme.'/static/images/cms/ad_300x100/'.$announce_item['imagen'].'.jpg" width="300" height="100" alt=""/>
			</a>
		</div>'); endforeach; ?>
</div>
</div>
</div>
<span class="clear"><!-- --></span>
</div>
<div id="copyright">
<a href="javascript:;" tabindex="100" id="change-language">
<span>Europa - Español (EU)</span>
</a>
©2012 <?php echo $server_name; ?>. Servidor Privado de World of Warcraf
<br />Blizzard Entertainment, Inc. Todos los derechos reservados.<br />P&aacute;gina cargada en {elapsed_time}</strong> segundos.</p>
<a onClick="return Core.open(this);" href="<?php echo $path; ?>/index.php/about/terms-of-use" tabindex="100">Terminos de Condiciones y Uso</a>
<a onClick="return Core.open(this);" href="<?php echo $path; ?>/index.php/policy" tabindex="100">Política de Privacidad</a>
</div>
<span class="clear"><!-- --></span>
<div id="international" style=": block; ">
		<div class="column">
			<h3>América</h3>

			<ul>
						<li>
							<a href="http://us.battle.net/account/management/?locale=de-de" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to de-de&apos;); return true;">
							   Deutsch
							</a>
						</li>
						<li>
							<a href="http://us.battle.net/account/management/?locale=en-gb" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-gb&apos;); return true;">
							   English (EU)
							</a>
						</li>
						<li>
							<a href="http://us.battle.net/account/management/?locale=en-us" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-us&apos;); return true;">
							   English (US)
							</a>
						</li>
						<li>
							<a href="http://us.battle.net/account/management/?locale=es-mx" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-mx&apos;); return true;">
							   Español (AL)
							</a>
						</li>
						<li>
							<a href="http://us.battle.net/account/management/?locale=es-es" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-es&apos;); return true;">
							   Español (EU)
							</a>
						</li>
						<li>
							<a href="http://us.battle.net/account/management/?locale=fr-fr" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to fr-fr&apos;); return true;">
							   Français
							</a>
						</li>
						<li>
							<a href="http://us.battle.net/account/management/?locale=it-it" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to it-it&apos;); return true;">
							   Italiano
							</a>
						</li>
						<li>
							<a href="http://us.battle.net/account/management/?locale=pl-pl" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pl-pl&apos;); return true;">
							   Polski
							</a>
						</li>
						<li>
							<a href="http://us.battle.net/account/management/?locale=pt-br" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pt-br&apos;); return true;">
							   Português (AL)
							</a>
						</li>
			</ul>
		</div>
		<div class="column">
			<h3>Europa</h3>

			<ul>
						<li>
							<a href="http://eu.battle.net/account/management/?locale=de-de" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to de-de&apos;); return true;">
							   Deutsch
							</a>
						</li>
						<li>
							<a href="http://eu.battle.net/account/management/?locale=en-gb" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-gb&apos;); return true;">
							   English (EU)
							</a>
						</li>
						<li>
							<a href="http://eu.battle.net/account/management/?locale=en-us" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-us&apos;); return true;">
							   English (US)
							</a>
						</li>
						<li>
							<a href="http://eu.battle.net/account/management/?locale=es-mx" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-mx&apos;); return true;">
							   Español (AL)
							</a>
						</li>
						<li>
							<a href="http://eu.battle.net/account/management/?locale=es-es" class="selected" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-es&apos;); return true;">
							   Español (EU)
							</a>
						</li>
						<li>
							<a href="http://eu.battle.net/account/management/?locale=fr-fr" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to fr-fr&apos;); return true;">
							   Français
							</a>
						</li>
						<li>
							<a href="http://eu.battle.net/account/management/?locale=it-it" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to it-it&apos;); return true;">
							   Italiano
							</a>
						</li>
						<li>
							<a href="http://eu.battle.net/account/management/?locale=pl-pl" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pl-pl&apos;); return true;">
							   Polski
							</a>
						</li>
						<li>
							<a href="http://eu.battle.net/account/management/?locale=pt-br" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pt-br&apos;); return true;">
							   Português (AL)
							</a>
						</li>
			</ul>
		</div>
		<div class="column">
			<h3>Corea</h3>

			<ul>
						<li>
							<a href="http://kr.battle.net/account/management/?locale=de-de" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to de-de&apos;); return true;">
							   Deutsch
							</a>
						</li>
						<li>
							<a href="http://kr.battle.net/account/management/?locale=en-gb" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-gb&apos;); return true;">
							   English (EU)
							</a>
						</li>
						<li>
							<a href="http://kr.battle.net/account/management/?locale=en-us" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-us&apos;); return true;">
							   English (US)
							</a>
						</li>
						<li>
							<a href="http://kr.battle.net/account/management/?locale=es-mx" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-mx&apos;); return true;">
							   Español (AL)
							</a>
						</li>
						<li>
							<a href="http://kr.battle.net/account/management/?locale=es-es" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-es&apos;); return true;">
							   Español (EU)
							</a>
						</li>
						<li>
							<a href="http://kr.battle.net/account/management/?locale=fr-fr" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to fr-fr&apos;); return true;">
							   Français
							</a>
						</li>
						<li>
							<a href="http://kr.battle.net/account/management/?locale=it-it" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to it-it&apos;); return true;">
							   Italiano
							</a>
						</li>
						<li>
							<a href="http://kr.battle.net/account/management/?locale=pl-pl" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pl-pl&apos;); return true;">
							   Polski
							</a>
						</li>
						<li>
							<a href="http://kr.battle.net/account/management/?locale=pt-br" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pt-br&apos;); return true;">
							   Português (AL)
							</a>
						</li>
			</ul>
		</div>
		<div class="column">
			<h3>Taiwán</h3>

			<ul>
						<li>
							<a href="http://tw.battle.net/account/management/?locale=de-de" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to de-de&apos;); return true;">
							   Deutsch
							</a>
						</li>
						<li>
							<a href="http://tw.battle.net/account/management/?locale=en-gb" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-gb&apos;); return true;">
							   English (EU)
							</a>
						</li>
						<li>
							<a href="http://tw.battle.net/account/management/?locale=en-us" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-us&apos;); return true;">
							   English (US)
							</a>
						</li>
						<li>
							<a href="http://tw.battle.net/account/management/?locale=es-mx" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-mx&apos;); return true;">
							   Español (AL)
							</a>
						</li>
						<li>
							<a href="http://tw.battle.net/account/management/?locale=es-es" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-es&apos;); return true;">
							   Español (EU)
							</a>
						</li>
						<li>
							<a href="http://tw.battle.net/account/management/?locale=fr-fr" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to fr-fr&apos;); return true;">
							   Français
							</a>
						</li>
						<li>
							<a href="http://tw.battle.net/account/management/?locale=it-it" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to it-it&apos;); return true;">
							   Italiano
							</a>
						</li>
						<li>
							<a href="http://tw.battle.net/account/management/?locale=pl-pl" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pl-pl&apos;); return true;">
							   Polski
							</a>
						</li>
						<li>
							<a href="http://tw.battle.net/account/management/?locale=pt-br" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pt-br&apos;); return true;">
							   Português (AL)
							</a>
						</li>
			</ul>
		</div>
		<div class="column">
			<h3>China</h3>

			<ul>
						<li>
							<a href="http://www.battlenet.com.cn/account/management/?locale=de-de" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to de-de&apos;); return true;">
							   Deutsch
							</a>
						</li>
						<li>
							<a href="http://www.battlenet.com.cn/account/management/?locale=en-gb" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-gb&apos;); return true;">
							   English (EU)
							</a>
						</li>
						<li>
							<a href="http://www.battlenet.com.cn/account/management/?locale=en-us" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-us&apos;); return true;">
							   English (US)
							</a>
						</li>
						<li>
							<a href="http://www.battlenet.com.cn/account/management/?locale=es-mx" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-mx&apos;); return true;">
							   Español (AL)
							</a>
						</li>
						<li>
							<a href="http://www.battlenet.com.cn/account/management/?locale=es-es" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-es&apos;); return true;">
							   Español (EU)
							</a>
						</li>
						<li>
							<a href="http://www.battlenet.com.cn/account/management/?locale=fr-fr" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to fr-fr&apos;); return true;">
							   Français
							</a>
						</li>
						<li>
							<a href="http://www.battlenet.com.cn/account/management/?locale=it-it" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to it-it&apos;); return true;">
							   Italiano
							</a>
						</li>
						<li>
							<a href="http://www.battlenet.com.cn/account/management/?locale=pl-pl" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pl-pl&apos;); return true;">
							   Polski
							</a>
						</li>
						<li>
							<a href="http://www.battlenet.com.cn/account/management/?locale=pt-br" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pt-br&apos;); return true;">
							   Português (AL)
							</a>
						</li>
			</ul>
		</div>
		<div class="column">
			<h3>Asia Suroriental</h3>

			<ul>
						<li>
							<a href="http://sea.battle.net/account/management/?locale=de-de" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to de-de&apos;); return true;">
							   Deutsch
							</a>
						</li>
						<li>
							<a href="http://sea.battle.net/account/management/?locale=en-gb" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-gb&apos;); return true;">
							   English (EU)
							</a>
						</li>
						<li>
							<a href="http://sea.battle.net/account/management/?locale=en-us" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to en-us&apos;); return true;">
							   English (US)
							</a>
						</li>
						<li>
							<a href="http://sea.battle.net/account/management/?locale=es-mx" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-mx&apos;); return true;">
							   Español (AL)
							</a>
						</li>
						<li>
							<a href="http://sea.battle.net/account/management/?locale=es-es" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to es-es&apos;); return true;">
							   Español (EU)
							</a>
						</li>
						<li>
							<a href="http://sea.battle.net/account/management/?locale=fr-fr" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to fr-fr&apos;); return true;">
							   Français
							</a>
						</li>
						<li>
							<a href="http://sea.battle.net/account/management/?locale=it-it" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to it-it&apos;); return true;">
							   Italiano
							</a>
						</li>
						<li>
							<a href="http://sea.battle.net/account/management/?locale=pl-pl" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pl-pl&apos;); return true;">
							   Polski
							</a>
						</li>
						<li>
							<a href="http://sea.battle.net/account/management/?locale=pt-br" tabindex="100" onclick="Locale.trackEvent(&apos;Change Language&apos;, &apos;es-es to pt-br&apos;); return true;">
							   Português (AL)
							</a>
						</li>
			</ul>
		</div>

        

	<span class="clear"><!-- --></span>
</div>
<div id="legal">
<div id="legal-ratings" class="png-fix">
<a href="http://www.pegi.info/" onClick="return Core.open(this);">
<img class="legal-image" alt="" src="<?php echo ''.$path.'/'.APPPATH.'/themes/'.$theme.''; ?>/static/local-common/images/legal/eu/pegi-wow.png" />
</a>
</div>
<div id="blizzard" class="png-fix">
<a href="http://blizzard.com/" tabindex="100"><img src="<?php echo ''.$path.'/'.APPPATH.'/themes/'.$theme.''; ?>/static/local-common/images/logos/blizz-wow.png" alt="" /></a>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
<div id="service">
<ul class="service-bar">
<li class="service-cell service-home"><?php echo sprintf('<a href="'.$path.'" tabindex="50" accesskey="1" title="'.$server_name.'">&nbsp;</a>'); ?></li>
<?php
if($logged_in != TRUE)
echo '<li class="service-cell service-welcome">
<a href="?login" onClick="return Login.open()">Inicia sesión</a> o <a href="'.$path.'/index.php/account/register">Crea una cuenta</a>
</li>';
else
echo '<li class="service-cell service-welcome">
Bienvenido(a), '.$username.'
 |  <a href="/index.php/account/logout" tabindex="50" accesskey="2">desconectar</a>
</li>'; ?>
<li class="service-cell service-account"><a href="<?php echo $path; ?>/index.php/account/management/" class="service-link" tabindex="50" accesskey="3">Cuenta</a></li>
<li class="service-cell service-support service-support-enhanced">
<a href="#support" class="service-link service-link-dropdown" tabindex="50" accesskey="4" id="support-link" onClick="return false" style="cursor: progress" rel="javascript">Asistencia<span class="no-support-tickets" id="support-ticket-count"></span></a>
<div class="support-menu" id="support-menu" style="display:none;">
<div class="support-primary">
<ul class="support-nav">
<li>
<a href="<?php echo $path; ?>/index.php/support/new-ticket" tabindex="55" class="support-category">
<strong class="support-caption">Hacer una pregunta</strong>
Consigue ayuda de nuestros agentes
</a>
</li>
<li>
<a href="<?php echo $path; ?>/index.php/support/ticket/my-tickets" tabindex="55" class="support-category">
<strong class="support-caption">Tus consultas</strong>
Ver historial completo de tus consultas (debes iniciar sesión).
</a>
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
<a href="#explore" tabindex="50" accesskey="5" class="dropdown" id="explore-link" onClick="return false" style="cursor: progress" rel="javascript">Explorar</a>
<div class="explore-menu" id="explore-menu" style="display:none;">
<div class="explore-primary">
<ul class="explore-nav">
<li>
<a href="http://eu.battle.net/" tabindex="55" data-label="Home">
<strong class="explore-caption">Battle.net</strong>
Conecta. Juega. Une.
</a>
</li>
<li>
<a href="https://eu.battle.net/account/management/" tabindex="55" data-label="Account">
<strong class="explore-caption">Cuenta</strong>
Gestiona tu cuenta
</a>
</li>
<li>
<a href="http://eu.blizzard.com/support/" tabindex="55" data-label="Support">
<strong class="explore-caption">Asistencia</strong>
Consigue asistencia
</a>
</li>
<li>
<a href="https://eu.battle.net/account/management/get-a-game.html" tabindex="55" data-label="Buy Games">
<strong class="explore-caption">Comprar juegos</strong>
Juegos en soporte digital para descargar
</a>
</li>
</ul>
<div class="explore-links">
<h2 class="explore-caption">Más</h2>
<ul>
<li><a href="http://eu.battle.net/what-is/" tabindex="55" data-label="More">¿Qué es Battle.net?</a></li>
<li><a href="http://eu.battle.net/realid/" tabindex="55" data-label="More">¿Qué es ID Real?</a></li>
<li><a href="https://eu.battle.net/account/parental-controls/index.html" tabindex="55" data-label="More">Control paterno</a></li>
<li><a href="http://eu.battle.net/security/" tabindex="55" data-label="More">Seguridad de cuentas</a></li>
<li><a href="http://eu.battle.net/games/classic" tabindex="55" data-label="More">Juegos clásicos</a></li>
<li><a href="https://eu.battle.net/account/support/index.html" tabindex="55" data-label="More">Asistencia de cuentas</a></li>
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
<a href="http://eu.battle.net/sc2/" tabindex="55" data-label="Game - sc2">
<span class="explore-game-inner">
<strong class="explore-caption">StarCraft II</strong>
<span>Noticias y Foros</span> <span>Guía para principiantes</span> <span>Perfil de jugador</span> <span>…</span>
</span>
</a>
</li>
<li class="explore-game explore-game-wow">
<a href="./index.html" tabindex="55" data-label="Game - wow">
<span class="explore-game-inner">
<strong class="explore-caption">World of Warcraft</strong>
<span>Perfil de personaje</span> <span>Noticias y Foros</span> <span>Guía de juego</span> <span>…</span>
</span>
</a>
</li>
<li class="explore-game explore-game-d3">
<a href="http://eu.battle.net/d3/" tabindex="55" data-label="Game - d3">
<span class="explore-game-inner">
<strong class="explore-caption">Diablo III</strong>
<span>Guía de juego</span> <span>Noticias sobre la beta</span> <span>Foros</span> <span>…</span>
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
No estás utilizando la última versión de tu navegador.<br />
<a href="http://eu.blizzard.com/support/article/browserupdate">Actualizar</a> o <a href="http://www.google.com/chromeframe/?hl=es-ES" id="chrome-frame-link">instalar Google Chrome Frame</a>.
<a href="#close" class="warning-close" onclick="App.closeWarning('#browser-warning', 'browserWarning'); return false;"></a>
</div>
</div>
<![endif]-->
<!--[if lt IE 8]> <script type="text/javascript" src="/wow/static/local-common/js/third-party/CFInstall.min.js?v37"></script>
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
Debes tener activado JavaScript para utilizar esta página.
</div>
</div>
</noscript>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
var xsToken = 'e906d4b6-d92b-459e-9e82-5625903fe680';
var supportToken = '';
var Msg = {
support: {
ticketNew: 'Fue creado el Ticket {0}.',
ticketStatus: 'El estado del Ticket {0} cambi&oacute; a {1}.',
ticketOpen: 'Abierto',
ticketAnswered: 'Respondido',
ticketResolved: 'Resuelto',
ticketCanceled: 'Cancelado',
ticketArchived: 'Archivado',
ticketInfo: 'M&aacute;s Info',
ticketAll: 'Ver todos los Tickets'
},
cms: {
requestError: 'No fue posible completar tu solicitud.',
ignoreNot: 'No est&aacute;s ignorando a este usuario',
ignoreAlready: 'Ya est&aacute;s ignorando a este usuario',
stickyRequested: 'Solicitaste pegar el mensaje',
stickyHasBeenRequested: 'Ya enviaste una solicitud de pegado para este hilo.',
postAdded: 'Mensaje agregado al rastreador',
postRemoved: 'Mensaje eliminado del rastreador',
userAdded: 'Usuario agregado al rastreador',
userRemoved: 'Usuario eliminado del rastreador',
validationError: 'Un campo requerido se encuentra incompleto',
characterExceed: 'El contenido del mensaje excede los XXXXXX caracteres.',
searchFor: "Buscar",
searchTags: "Art&iacute;culos marcados:",
characterAjaxError: "Es posible que hayas sido desconectado. Por favor actualiza la p&aacute;gina e int&eacute;ntalo de nuevo.",
ilvl: "Niv. de obj.",
shortQuery: "Las solicitudes de b&uacute;squeda deber&aacute;n tener una extensi&oacute;n de, al menos, dos caracteres."
},
bml: {
bold: 'Negritas',
italics: 'Cursivas',
underline: 'Subrayar',
list: 'Lista sin ordenar',
listItem: 'Listado',
quote: 'Citar',
quoteBy: 'Cita por {0}',
unformat: 'Eliminar formato',
cleanup: 'Corregir corte de l&iacute;neas',
code: 'Bloques de c&oacute;digo',
item: 'Objeto de WoW',
itemPrompt: 'ID de objeto:',
url: 'URL',
urlPrompt: 'Direcci&oacute;n URL:'
},
ui: {
submit: 'Enviar',
cancel: 'Cancelar',
reset: 'Reiniciar',
viewInGallery: 'Ver en la galer&iacute;a',
loading: 'Cargando%u2026',
unexpectedError: 'Ha ocurrido un error',
fansiteFind: 'Encuentra esto en:',
fansiteFindType: '{0} en:',
fansiteNone: 'No hay fansites disponibles.'
},
grammar: {
colon: '{0}:',
first: 'Primero',
last: '&uacute;ltimo'
},
fansite: {
achievement: 'Logro',
character: 'Personaje',
faction: 'Facci&oacute;n',
'class': 'Clase',
object: 'Objeto',
talentcalc: 'Talentos',
skill: 'Habilidad',
quest: 'Misi&oacute;n',
spell: 'Hechizo',
event: 'Evento',
title: 'T&iacute;tulo',
arena: 'Arena',
guild: 'Hermandad',
zone: 'Zona',
item: 'Objeto',
race: 'Raza',
npc: 'PNJ',
pet: 'Mascota'
},
search: {
kb: 'Soporte',
post: 'Foros',
article: 'Art&iacute;culos',
static: 'Contenido general',
wowcharacter: 'Personajes',
wowitem: 'Objetos',
wowguild: 'Hermandades',
wowarenateam: 'Equipos de Arena',
other: 'Otro'
}
};
//]]>
</script>
<?php
echo sprintf('<script type="text/javascript">
//<![CDATA[
Core.load("'.$path.'/'.APPPATH.'themes/'.$theme.'/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v37");
Core.load("'.$path.'/'.APPPATH.'themes/'.$theme.'/static/local-common/js/login.js?v37", false, function() {
Login.embeddedUrl = \''.$path.'/index.php/account/login\';
});
//]]>
</script>
<script type="text/javascript" src="'.$path.'/'.APPPATH.'themes/'.$theme.'/static/local-common/js/menu.js?v37"></script>
<script type="text/javascript" src="'.$path.'/'.APPPATH.'themes/'.$theme.'/static/js/wow.js?v19"></script>
<script type="text/javascript" src="'.$path.'/'.APPPATH.'themes/'.$theme.'/static/local-common/js/cms.js?v37"></script>
<!--[if lt IE 8]> <script type="text/javascript" src="'.$path.''.APPPATH.'themes/'.$theme.'/static/local-common/js/third-party/jquery.pngFix.pack.js?v37"></script>
<script type="text/javascript">
//<![CDATA[
$(\'.png-fix\').pngFix(); //]]>
</script>
<![endif]-->'); ?>
</body>
</html>