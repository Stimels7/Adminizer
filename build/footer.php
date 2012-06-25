<hr>
<div class="container">
<footer style="text-align:center">
	<h6><?= $main_class->getSiteSettings('footer_sign'); ?></h6>
	<?= $main_class->getContent('footer_text'); ?>
	
	<div class="footer" style="text-align:left; font-weight: 100; font-size: 10px;">
	<hr>
		<p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>. Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
		<p>Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
		<p>Код распространяется под лицензией <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>. Документация распространяется под лицензией <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
		<p>Иконки нарисованы и предоставлены <a href="http://glyphicons.com">Glyphicons Free</a>, под лицензией <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
	</div>
	
	<script src="<?= SITE_URL ?>/admin/js/bootstrap.min.js"></script>
	<script src="<?= SITE_URL ?>/admin/js/google-code-prettify/prettify.js"></script>
	<script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
	<script>
		$('a').tooltip();
		prettyPrint();
	</script>
</footer>
</div>

</div> <!-- Close Content_Container class div tag -->


<? require_once 'user_forms.php' ?>


<script type="text/javascript">
	window.___gcfg = {
	  lang: '<?= $fb_lang ?>',
	  parsetags: 'onload'
	};
	
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<?
$googleID = $main_class->getSiteSettings('google_analytics');

if($googleID)
{?>

<script>
  var _gaq=[['_setAccount','<?= $googleID ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<?}?>
<!--
Copyright 2012 Veliov Group: Dmitriy A. Golev

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
-->