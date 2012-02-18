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
		?><div id="content">
<div class="content-top">
<div class="content-bot">

    <div id="homepage">
        <div id="left">
	<?php
    echo sprintf('<script type="text/javascript" src="'.$path.'/'.APPPATH.'themes/'.$theme.'/static/local-common/js/slideshow.js?v37"></script>
	<script type="text/javascript" src="'.$path.'/'.APPPATH.'themes/'.$theme.'/static/local-common/js/third-party/swfobject.js?v37"></script>');
	?>
    <div id="slideshow" class="ui-slideshow">
        <div class="slideshow">
		<?php 
		$i = 0;
		foreach($islider as $islider_item):
				if($i === 0)
				{
					echo sprintf('<div class="slide" id="slide-'.$i.'"
					style="background-image: url(\''.APPPATH.'themes/'.$theme.'/static/images/cms/carousel_header/'.$islider_item['banner'].'.jpg\'); ">
				</div>');
				}
				if($i != 0)
				{
					echo sprintf('<div class="slide" id="slide-'.$i.'"
					style="background-image: url(\''.APPPATH.'themes/'.$theme.'/static/images/cms/carousel_header/'.$islider_item['banner'].'.jpg\'); display: none; ">
				</div>');
				}
		$i++; endforeach; ?>
		</div>

			<div class="paging">
				<?php
				$i=0;
				foreach($islider as $islider_item):
				if($i != 0){$set = '';}
				else{$set = 'class="current"';}
				echo sprintf('
					<a href="javascript:;" id="paging-'.$i.'"
					   onclick="Slideshow.jump('.$i.', this);"
						onmouseover="Slideshow.preview('.$i.');" '.$set.'></a>');
					$i++; endforeach; 
					?>
			</div>
		<?php foreach($leader_islider as $leader_islider_item):
				echo sprintf('
		<div class="caption">
			<h3><a href="'.$leader_islider_item['link'].'" class="link">'.$leader_islider_item['title'].'</a></h3>
			'.$leader_islider_item['desc'].'
		</div>');
		endforeach; ?>

		<div class="preview"></div>
		<div class="mask"></div>
    </div>

        <script type="text/javascript">
        //<![CDATA[
        $(function() {
            Slideshow.initialize('#slideshow', [
					<?php
					$i = 0;
					foreach ($islider as $islider_item):
					echo sprintf('
{
image: "'.APPPATH.'themes/'.$theme.'/static/images/cms/carousel_header/'.$islider_item['banner'].'.jpg",
desc: "'.$islider_item['desc'].'",
title: "'.$islider_item['title'].'",
url: "'.$islider_item['link'].'",
id: "'.$i.'"
}');
$i++;
if($i != $limit)
{
	echo ',';
}
endforeach;
?>
]);

        });
        //]]>
        </script>

			<div class="homepage-news-wrapper">
  <div class="featured-news">
	  	<div class="featured-news-inner">
		
	<?php foreach ($news_top as $news_top_item):
        echo sprintf('<div class="featured">
            <a href="'.$path.'/index.php/news/'.$news_top_item['id'].'#blog">
	         <span class="featured-img" style="background-image: url(\''.APPPATH.'themes/'.$theme.'/static/images/cms/blog_thumbnail/'.$news_top_item['thumb'].'.jpg\')"><span class="featured-img-frame"></span></span>
               <span class="featured-desc">'.$news_top_item['title'].'</span>
            </a>
        </div>');
	endforeach; ?>

        <span class="clear"></span>
    </div>
    </div>

            <div id="news-updates">
		        	<div id="news-updates-inner">			
	<?php 
	$i = 1;
	foreach ($news as $news_item): ?>
	<?php
	$ID = $news_item['id'];
	$news_comments = $this->news_model->get_index_comments_on_news($ID);
	$this->fecha = $this->relative_time->FechaRelativa($news_item['date']);
	if($i == 1){
   echo sprintf('<div class="news-article first-child">');
	}else{
   echo sprintf('<div class="news-article">');
	}
	echo sprintf('<div class="news-article-inner">
            <h3>
                <a href="'.$path.'/index.php/news/'.$news_item['id'].'#blog">'.$news_item['title'].'</a>
            </h3>
            <div class="by-line">
                por <a href="'.$path.'/index.php/search/'.$news_item['author'].'">'.$news_item['author'].'</a>
                <span class="spacer"></span> '.$this->fecha.'
                    <a href="'.$path.'/index.php/news/'.$news_item['id'].'#comments" class="comments-link">
                    '.$news_comments.'
                    </a>
            </div>

        <div class="article-left" style="background-image: url(\''.APPPATH.'themes/'.$theme.'/static/images/cms/blog_thumbnail/'.$news_item['thumb'].'.jpg\');">
            <a href="'.$path.'/index.php/news/'.$news_item['id'].'#blog"><span class="thumb-frame"></span></a>
        </div>

        <div class="article-right">
            <div class="article-summary">
                <p>'.$news_item['text'].'</p>

                <a href="'.$path.'/index.php/news/'.$news_item['id'].'" class="more">
                    	Leer M&aacute;s
                </a>
            </div>
        </div>
	<span class="clear"><!-- --></span>
    </div>
	</div>
   '); 
   $i++;
   endforeach ?>
				<div class="blog-paging">
	<span class="clear"><!-- --></span>
					</div>
            </div>
        </div>
            </div>
        </div>

		<div id="right" class="ajax-update">
	<div id="sidebar-marketing" class="sidebar-module">
	<div class="bnet-offer">
		<!--  -->
        <?php foreach($announce as $announce_item):
		echo sprintf('
		<div class="bnet-offer-bg">
				<a href="'.$announce_item['link'].'" target="_blank" id="'.$announce_item['id'].'" class="bnet-offer-image">
				<img src="'.APPPATH.'themes/'.$theme.'/static/images/cms/ad_300x250/'.$announce_item['imagen'].'.jpg" width="300" height="250" alt=""/>
			</a>
		</div>'); endforeach; ?>
	</div>
	</div>
 <div id="sidebar-links" class="promo-ad">
                    <a href="<?php echo $path; ?>/index.php/security" onClick="window.open(this.href); return false;" class="promo-authenticator">
                        <span class="buy-now-cart">Cuenta antibalas</span>
                    </a>
            </div>
<div class="sidebar" id="sidebar">
			<div class="sidebar-top">
				<div class="sidebar-bot">
					<div class="sidebar-loading" id="sidebar-loading">
						<?php echo $loader; ?>
					</div>

				</div>
			</div>
		</div>

        <script type="text/javascript">
        //<![CDATA[
			$(function() {
				App.sidebar([
						{ "type": "sotd", "query": "" },
						{ "type": "forums", "query": "" }
				]);
			});
        //]]>
        </script>
			</div>
	<span class="clear"><!-- --></span>
	</div>

</div>
</div>
</div>