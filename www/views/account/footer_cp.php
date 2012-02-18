<?php
if (!defined('BASEPATH')) exit('No se permite el acceso a este script.');
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
<div id="footer">
<div id="sitemap">
<div class="column">
<h3 class="bnet">
<a href="http://us.battle.net/" tabindex="100">Battle.net</a>
</h3>
<ul>
<li><a href="http://us.battle.net/what-is/">&iquest;Qu&eacute; es Battle.net?</a></li>
<li><a href="https://us.battle.netaccount/management/get-a-game.html">Adquirir juegos</a></li>
<li><a href="https://us.battle.netaccount/management/">Cuenta</a></li>
<li><a href="http://us.battle.net/support/">Asistencia</a></li>
<li><a href="http://us.battle.net/realid/">ID Real</a></li>
</ul>
</div>
<div class="column">
<h3 class="games">
<a href="http://us.battle.net/" tabindex="100">Juegos</a>
</h3>
<ul>
<li><a href="http://us.battle.net/sc2/">StarCraft II</a></li>
<li><a href="http://us.battle.net/wow/">World of Warcraft</a></li>
<li><a href="http://us.battle.net/d3/">Diablo III</a></li>
<li><a href="http://us.battle.net/games/classic">Juegos cl&aacute;sicos</a></li>
<li><a href="https://us.battle.netaccount/download/">Descarga de juegos</a></li>
</ul>
</div>
<div class="column">
<h3 class="account">
<a href="https://us.battle.netaccount/management/" tabindex="100">Cuenta</a>
</h3>
<ul>
<li><a href="https://us.battle.netaccount/support/login-support.html">&iquest;No puedes iniciar sesi&oacute;n?</a></li>
<li><a href="https://us.battle.netaccount/creation/tos.html">Crear cuenta</a></li>
<li><a href="https://us.battle.netaccount/management/">Resumen de cuenta</a></li>
<li><a href="https://us.battle.netaccount/management/authenticator.html">Seguridad de cuentas</a></li>
<li><a href="https://us.battle.netaccount/management/add-game.html">A&ntilde;adir juego</a></li>
<li><a href="https://us.battle.netaccount/management/redemption/redeem.html">Canjear c&oacute;digo de promoci&oacute;n</a></li>
</ul>
</div>
<div class="column">
<h3 class="support">
<a href="http://us.battle.net/support/" tabindex="100">Asistencia</a>
</h3>
<ul>
<li><a href="http://us.battle.net/support/">Art&iacute;culos de asistencia</a></li>
<li><a href="https://us.battle.netaccount/parental-controls/index.html">Control paterno</a></li>
<li><a href="http://us.battle.net/security/">Protege tu cuenta</a></li>
<li><a href="http://us.battle.net/security/help">&iexcl;Ayuda, me han pirateado!</a></li>
</ul>
</div>
<span class="clear"><!-- --></span>
</div>
<div id="copyright">
<a href="javascript:;" tabindex="100" id="change-language">
<span>Am&eacute;rica - Espa&ntilde;ol (EU)</span>
</a>
&copy;2012 Blizzard Entertainment, Inc. Todos los derechos reservados
<a onclick="return Core.open(this);" href="http://us.blizzard.com/company/about/termsofuse.html" tabindex="100">Condiciones de Uso</a>
<a onclick="return Core.open(this);" href="http://us.blizzard.com/company/legal/" tabindex="100">Legal</a>
<a onclick="return Core.open(this);" href="http://us.blizzard.com/company/about/privacy.html" tabindex="100">Protecci&oacute;n de datos</a>
<a onclick="return Core.open(this);" href="http://us.blizzard.com/company/about/infringementnotice.html" tabindex="100">Derechos de autor</a>
</div>
<div id="international"></div>
<div id="legal">
<div id="legal-ratings" class="png-fix">
<a class="truste-link" href="//privacy-policy.truste.com/click-with-confidence/ctv/en/us.battle.net/seal_m" title="Validar certificado de privacidad TRUSTe" onclick="return Core.open(this);">
<?php echo '<img class="legal-image" src="'.$path.'/'.APPPATH.'themes/'.$theme.'/account/images/layout/seal_m.png" alt="Validar certificado de privacidad TRUSTe"/>'; ?>
</a>
<a href="http://www.esrb.org/ratings/ratings_guide.jsp" onclick="return Core.open(this);">
<img class="legal-image" alt="" src="<?php echo "".$path."/".APPPATH."themes/".$theme."/account/local-common/images/legal/us/esrb-pending-to-mature.png"; ?>" />
</a>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
var xsToken = 'b5b271b6-9fa7-495a-861c-1bcbb6736e3b';
var supportToken = '';
var Msg = {
support: {
ticketNew: 'Se ha creado la consulta nº{0}.',
ticketStatus: 'El estado de tu consulta nº{0} se ha cambiado a {1}.',
ticketOpen: 'Abierta',
ticketAnswered: 'Respondida',
ticketResolved: 'Resuelta',
ticketCanceled: 'Cancelada',
ticketArchived: 'Archivado',
ticketInfo: 'Se necesita m&aacute;s informaci&oacute;n',
ticketAll: 'Ver todas las consultas'
},
cms: {
requestError: 'Tu petici&oacute;n no puede ser llevada a cabo.',
ignoreNot: 'No has bloqueado a este usuario.',
ignoreAlready: 'Ya has bloqueado a este usuario.',
stickyRequested: 'Realizada petici&oacute;n de adhesivo.',
stickyHasBeenRequested: 'Ya has realizado una petici&oacute;n de adhesivo para este asunto.',
postAdded: 'Comentario a&ntilde;adido al rastreador.',
postRemoved: 'Comentario eliminado del rastreador.',
userAdded: 'Usuario a&ntilde;adido al rastreador.',
userRemoved: 'Usuario eliminado del rastreador.',
validationError: 'Campo obligatorio sin cumplimentar.',
characterExceed: 'El cuerpo del comentario supera los XXXXXX caracteres.',
searchFor: "Buscar",
searchTags: "Art&iacute;culos etiquetados:",
characterAjaxError: "Es posible que est&eacute;s desconectado. Por favor, actualiza la p&aacute;gina y vuelve a intentarlo.",
ilvl: "Nivel {0}",
shortQuery: "La b&uacute;squeda debe contener al menos 2 caracteres"
},
bml: {
bold: 'Negrita',
italics: 'Cursiva',
underline: 'Subrayar',
list: 'Lista sin orden',
listItem: 'Lista enumerada',
quote: 'Citar',
quoteBy: 'Publicado por {0}',
unformat: 'Elminar formato',
cleanup: 'Corregir saltos de l&iacute;neas',
code: 'Bloques de c&oacute;digo',
item: 'Objeto de WoW',
itemPrompt: 'N&uacute;mero de objeto:',
url: 'URL',
urlPrompt: 'Direcci&oacute;n de URL:'
},
ui: {
submit: 'Enviar',
cancel: 'Cancelar',
reset: 'Restablecer',
viewInGallery: 'Ver en galer&iacute;a',
loading: 'Cargando…',
unexpectedError: 'Se ha producido un error',
fansiteFind: 'Buscar en…',
fansiteFindType: 'Buscar {0} en…',
fansiteNone: 'Ning&uacute;n fansite disponible.'
},
grammar: {
colon: '{0}:',
first: 'Primera',
last: '&uacute;ltima'
},
fansite: {
achievement: 'logro',
character: 'personaje',
faction: 'facci&oacute;n',
'class': 'clase',
object: 'objeto',
talentcalc: 'talentos',
skill: 'profesi&oacute;n',
quest: 'misi&oacute;n',
spell: 'hechizo',
event: 'evento',
title: 't&iacute;tulo',
arena: 'equipo de Arenas',
guild: 'hermandad',
zone: 'zona',
item: 'objeto',
race: 'raza',
npc: 'PNJ',
pet: 'mascota'
},
search: {
kb: 'Asistencia',
post: 'Foros',
article: 'Art&iacute;culos',
static: 'Contenido',
wowcharacter: 'Personaje',
wowitem: 'Objeto',
wowguild: 'Hermandades',
wowarenateam: 'Equipos de Arenas',
other: 'Otros'
}
};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
Core.load("<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v38");
Core.load("<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/js/login.js?v38", false, function() {
Login.embeddedUrl = '<?php echo ''.$path.'/index.php/account/login'; ?>';
});
//]]>
</script>
<script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/js/bam.js?v24"></script>
<script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/js/tooltip.js?v38"></script>
<script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/js/menu.js?v38"></script>
<script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v38"></script>
<script type="text/javascript">
$(function() {
Locale.dataPath = '<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/data/i18n.frag.xml';
});
</script>
<!--[if lt IE 8]>
<script type="text/javascript" src="account/local-common/js/third-party/jquery.pngFix.pack.js?v38"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/js/inputs.js?v24"></script>
<script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/js/settings/password.js?v24"></script>
<!--[if lt IE 8]> <script type="text/javascript" src="<?php echo ''.$path.'/'.APPPATH.'themes/'.$theme.''; ?>/account/local-common/js/third-party/jquery.pngFix.pack.js?v38"></script>
<script type="text/javascript">
//<![CDATA[
$('.png-fix').pngFix(); //]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
(function() {
var ga = document.createElement('script');
var src = "https://ssl.google-analytics.com/ga.js";
if ('http:' == document.location.protocol) {
src = "http://www.google-analytics.com/ga.js";
}
ga.type = 'text/javascript';
ga.setAttribute('async', 'true');
ga.src = src;
var s = document.getElementsByTagName('script');
s = s[s.length-1];
s.parentNode.insertBefore(ga, s.nextSibling);
})();
//]]>
</script>
</body>
</html>