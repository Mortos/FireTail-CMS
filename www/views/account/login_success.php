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
<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="/www/themes/retail/static/local-common/css/common.css?v22"/>
		<link rel="stylesheet" type="text/css" href="/www/themes/retail/static/_themes/bam/css/master.css?v1"/>
			<link rel="stylesheet" type="text/css" media="all" href="/www/themes/retail/static/local-common/css/locale/es-es.css?v22" />
			<link rel="stylesheet" type="text/css" media="all" href="/www/themes/retail/static/_themes/bam/css/_lang/es-es.css?v1" />
		<script type="text/javascript" src="/www/themes/retail/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
		<script type="text/javascript" src="/www/themes/retail/static/local-common/js/core.js?v22"></script>
		<script>
			var targetOrigin = "<?php echo $path; ?>";

			function updateParent(action, key, value) {
				var obj = { action: action };

				if (key) obj[key] = value;

				parent.postMessage(JSON.stringify(obj), targetOrigin);
				return false;
			}

			function checkDefaultValue(input, isPass) {
				if (input.value == input.title)
					input.value = "";

				if (isPass)
					input.type = "password";
			}
		</script>
	</head>
	<body>
		<div id="embedded-login">
			<h1>Battle.net</h1>
		<a id="embedded-close" href="javascript:;" onClick="updateParent('close')"> </a>
        <script>
    parent.postMessage("{\"action\":\"success\"}", "<?php echo $path; ?>");
    </script>
    Has iniciado sesi&oacute;n <?php echo set_value('username'); ?>.
        
  		<script type="text/javascript">
			$(function() {
				$("#ssl-trigger").click(function() {
					updateParent('onload', 'height', $(document).height() + 76);
					$("#thawteseal").show();
				});
				
				$("#help-links a").click(function() {
					updateParent('redirect', 'url', this.href);
					return false;
				});

				$('#accountName').focus();

				updateParent('onload', 'height', $(document).height());
			});
		</script>
	</form>
		</div>
	</body>
	</html>