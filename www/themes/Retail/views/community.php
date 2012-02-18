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
<div id="content">
<div class="content-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<li>
<a href="../index.html" rel="np">
World of Warcraft
</a>
</li>
<li class="last">
<a href="index.html" rel="np">
Comunidad
</a>
</li>
</ol>
</div>
<div class="content-bot">			
	<div class="top-banner">
		<?php
        echo '
		<script type="text/javascript" src="'.$path.'/'.APPPATH.'themes/'.$theme.'/static/local-common/js/slideshow.js?v37"></script>
		<script type="text/javascript" src="'.$path.'/'.APPPATH.'themes/'.$theme.'/static/local-common/js/third-party/swfobject.js?v37"></script>';
        ?>

    <div id="slideshow" class="ui-slideshow">
        <div class="slideshow">
			<?php
				$i = 0;
				foreach($slider as $slider_item):
				echo '<div class="slide" id="slide-'.$i.'"
					style="background-image: url(\''.$path.'/'.APPPATH.'themes/'.$theme.'/static/images/cms/carousel_header/'.$slider_item['banner'].'.jpg\');';
					if($i != 0)
					{
						echo 'display: none;';
					}
					echo '"></div>';
				$i++; endforeach; ?>
		</div>

			<div class="paging">
			<?php
			$i = 0;
			foreach($slider as $slider_item):
			$date = date('d/m/Y', $slider_item['date']);
				echo'<a href="javascript:;" id="paging-'.$i.'"
					   onclick="Slideshow.jump('.$i.', this);"';
					    if($i == 0)
						{
							echo 'class="current"';
						}
							echo '>
							<span class="paging-title">'.$slider_item['title'].'</span>
							<span class="paging-date">'.$date.'</span>
					</a>'; 
					$i++;
					endforeach; ?>
			</div>

		<?php 
		foreach($lead_slider as $leader):
		echo '<div class="caption">
			<h3><a href="#" class="link">'.$leader['title'].'</a></h3>
			'.$leader['desc'].'
		</div>';
		endforeach;
		?>

		<div class="preview"></div>
		<div class="mask"></div>
    </div>

        <script type="text/javascript">
        //<![CDATA[
        $(function() {
            Slideshow.initialize('#slideshow', [
                <?php
				$i = 0;
				foreach($slider as $slider_item)
				{
				echo '{
					image: "'.$path.'/'.APPPATH.'themes/'.$theme.'/static/images/cms/carousel_header/'.$slider_item['banner'].'.jpg",
					desc: "'.$slider_item['desc'].'",
                    title: "'.$slider_item['title'].'",
                    url: "'.$slider_item['link'].'",
					id: "'.$slider_item['id'].'"
                }';
				if($i == 0)
				{
					echo ',';
				}
				elseif($i = 3)
				{
					echo '';
				}
				$i++;
				}
				?>
            ]);

        });
        //]]>
        </script>
	</div>
	
	<div class="community-content-body">
		<div class="body-wrapper">
			<div class="content-wrapper">
				<div class="inside-col">				
					<div class="official-content">
<div class="inside-section contests">
	<?php echo '<a href="http://eu.blizzard.com/es-es/community/contests/" target="_blank" class="main-link" style="background-image:url(\''.$path.'/'.APPPATH.'themes/'.$theme.'/static/images/community/thumbnails/thumb-contests.jpg\');">'; ?>
		<span>
			<span class="wrapper">
				<span class="banner-title">Concursos </span>
				<span class="banner-desc">Concursos vigentes y pasados que puedes consultar y en los que puedes participar. No te los pierdas.</span>
			</span>
		</span>
	</a>
</div>
<div class="inside-section forum">
	<?php echo '<a href="../forum/index.html" class="main-link" style="background-image:url(\''.$path.'/'.APPPATH.'themes/'.$theme.'/static/images/community/thumbnails/thumb-forum.jpg\');">'; ?>
		<span>
			<span class="wrapper">
				<span class="banner-title">Foros </span>
				<span class="banner-desc">Estate en contacto con otros jugadores de Blizzard a través de los foros oficiales de World of Warcraft.</span>
			</span>
		</span>
	</a>
</div>
						
	<span class="clear"><!-- --></span>
<div class="inside-section fanart">
	<?php echo '<a href="http://eu.blizzard.com/es-es/community/fanart/" target="_blank" class="main-link" style="background-image:url(\''.$path.'/'.APPPATH.'themes/'.$theme.'/static/images/community/thumbnails/thumb-fanart.jpg\');">'; ?>
		<span class="panel">
			<span class="wrapper">
				<span class="banner-title">Fan Art </span>
				<span class="view-all">Mostrar todo</span>
			</span>
		</span>
	</a>
		<a href="http://eu.blizzard.com/es-es/community/fanart/rules.html" class="tosubmit external">Enviar</a>
</div>

<div class="inside-section comics">
	<?php echo '<a href="../media/comics/index.html" class="main-link" style="background-image:url(\''.$path.'/'.APPPATH.'themes/'.$theme.'/static/images/community/thumbnails/thumb-comics.jpg\');">'; ?>
		<span class="panel">
			<span class="wrapper">
				<span class="banner-title">Cómics <em>(367)</em></span>
				<span class="view-all">Mostrar todo</span>
			</span>
		</span>
	</a>
		<a href="http://eu.blizzard.com/es-es/community/contests/comic/rules.html" class="tosubmit external">Enviar</a>
</div>
	<span class="clear"><!-- --></span>

<div class="inside-section screenshot">
	<?php echo '<a href="../media/screenshots/index.html" class="main-link" style="background-image:url(\''.$path.'/'.APPPATH.'themes/'.$theme.'/static/images/community/thumbnails/thumb-screenshot.jpg\');">'; ?>
		<span class="panel">
			<span class="wrapper">
				<span class="banner-title">Capturas de pantalla <em>(4.083)</em></span>
				<span class="view-all">Mostrar todo</span>
			</span>
		</span>
	</a>
		<a href="http://eu.blizzard.com/es-es/community/screenshots/index.html" class="tosubmit external">Enviar</a>
</div>

<div class="inside-section wallpaper">
	<?php echo '<a href="../media/wallpapers/fan-arthtml.html" class="main-link" style="background-image:url(\''.$path.'/'.APPPATH.'themes/'.$theme.'/static/images/community/thumbnails/thumb-wallpaper.jpg\');">'; ?>
		<span class="panel">
			<span class="wrapper">
				<span class="banner-title">Fondos de pantalla <em>(26)</em></span>
				<span class="view-all">Mostrar todo</span>
			</span>
		</span>
	</a>
		<a href="http://eu.blizzard.com/es-es/community/fanart/rules.html" class="tosubmit external">Enviar</a>
</div>


	<span class="clear"><!-- --></span>
					</div>	
				</div>
				
				<div class="outside-col">
										
					<div class="outside-section social-media">
						<div class="title-block">
							<span class="title">Redes sociales</span>
	<span class="clear"><!-- --></span>
						</div>
						<div class="content-block">
							<ul>
								<li><a href="http://www.facebook.com/WarcraftES" class="facebook" target="_blank"><span class="content-title">World of Warcraft en Facebook</span><span class="content-desc">Hazte amigo de World of Warcraft en Facebook para consultar todas las noticias y vídeos.</span></a></li>
								<li><a href="http://twitter.com/warcraft_Es" class="twitter" target="_blank"><span class="content-title">World of Warcraft en Twitter</span><span class="content-desc">No te pierdas ninguna novedad de World of Warcraft en Twitter.</span></a></li>
								<li><a href="http://www.youtube.com/user/WorldofWarcraftES" class="youtube" target="_blank"><span class="content-title">World of Warcraft en Youtube</span><span class="content-desc">Disfruta con nuestros vídeos, tráilers, cinemáticas y mucho más en nuestro canal oficial.</span></a></li>
							</ul>
						</div>
					</div>
					
					<div class="outside-section blizzard-community">
						<div class="title-block">
							<span class="title">Comunidad </span>
	<span class="clear"><!-- --></span>
						</div>
						<div class="content-block">
							<ul>
								<li><a href="http://eu.blizzard.com/es-es/community/insider/" class="blizzard-insider" target="_blank"><span class="content-title">Blizzard Insider</span><span class="content-desc">¿Te intrigan nuestras ideas y deseas suscribirte a nuestro boletín de noticias? Esta es tu oportunidad.</span></a></li>
								<li><a href="http://eu.blizzard.com/es-es/community/blizzcast/" class="blizzcast" target="_blank"><span class="content-title">Blizzcast</span><span class="content-desc">El podcast oficial de Blizzard podcast: entrevistas con los programadores, rondas de preguntas y respuestas y mucho más.</span></a></li>
							</ul>
						</div>
					</div>
				</div>
	<span class="clear"><!-- --></span>
			</div>		
		</div>	
	</div>
			
	<span class="clear"><!-- --></span>
</div>
</div>
</div>