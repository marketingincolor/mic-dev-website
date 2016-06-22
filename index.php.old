<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>MIC Development and Testing Domain</title>
<style>
/* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
margin: 0;
padding: 0;
border: 0;
font-size: 100%;
font: inherit;
vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
display: block;
}
body {
line-height: 1;
}
ol, ul {
list-style: none;
}
blockquote, q {
quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
content: '';
content: none;
}
table {
border-collapse: collapse;
border-spacing: 0;
}

/* site-specific CSS changes: */
/* Steel Colour Scheme:
2A3134 - main bg color
49555A
3F494D
B2CED9
7E929A
*/

body {
font-family: arial, helvetica;
background-color: #2A3134;
color: #fff;
}

h1 { font-size: 24pt; }
h2 { font-size: 19pt; }
h3 { font-size: 16pt; }
h4 { font-size: 12pt; }

.block { margin: 20px; padding:20px; }

.bc1 { background-color: #49555A; }
.bc2 { background-color: #3F494D; }
.bc3 { background-color: #B2CED9; }
.bc4 { background-color: #7E929A; }

.c0 { color: #2A3134; }
.c1 { color: #49555A; }
.c2 { color: #3F494D; }
.c3 { color: #B2CED9; }
.c4 { color: #7E929A; }

ul {margin:10px 20px;}
li {margin:10px;}
a:link, a:visited {color:#fff;}

</style>

<!-- INSERT SHARPSPRING TRACKING CODE -->
<!--<script type="text/javascript">
    var _ss = _ss || [];
    _ss.push(['_setDomain', 'https://koi-16K25SY.sharpspring.com/net']);
    _ss.push(['_setAccount', 'KOI-1FC22Y0']);
    _ss.push(['_trackPageView']);
    (function() {
        var ss = document.createElement('script');
        ss.type = 'text/javascript'; ss.async = true;
        ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-16K25SY.sharpspring.com/client/ss.js?ver=1.1.1';
        var scr = document.getElementsByTagName('script')[0];
        scr.parentNode.insertBefore(ss, scr);
    })();
</script>-->
</head>
<body>
	<div class="block bc1">
		<h1>dev.marketingincolor.com (new)</h1>
	</div>

	<div class="block bc2">
		Development and Testing site for Marketing In Color Project work -
	</div>

	<div class="block c3">
		Current Projects:
        <ul>
            <li><a href="./naviga">Naviga Test Site</a></li>
            <li><a href="./stormguard">Storm Guard Test Site</a></li>
            <li><a href="./easyenergy">Easy Energy Savings Test Site</a></li>
        </ul>
	</div>

	<div class="block c3">
		Upcoming Projects:
        <ul>
            <li><a href="./buddy">Base Buddypress Install</a></li>
        </ul>
	</div>

	<div class="block c4">
		Archived Projects:
        <ul>
            <li><a href="./buddy">Base Buddypress Install</a></li>
            <li><a href="./madico">Sunscape Test Site</a></li>
            <li><a href="./oscfhm">OSC FH Mgmt Test Site</a></li>
        </ul>
	</div>

    <div>
        <?php //TODO: fix method of automation for directory display, using examples here or other code
            $d = dir(".");
            echo "Path: " . $d->path . "\n";
            echo "<ul>";
            while (false !== ($entry = $d->read())) {
                echo "<li><a href='{$entry}'>{$entry}</a></li>";
            }
            echo "</ul>";
            $d->close();
        ?>

        <?php
        function recurseDir($dir) {
    	    if(is_dir($dir)) {
        		if($dh = opendir($dir)){
        			while($file = readdir($dh)){
        				if($file != '.' && $file != '..'){
        					if(is_dir($dir . $file)){
        						echo $dir . $file;
        						// since it is a directory we recurse it.
        						recurseDir($dir . $file . '/');
        					}else{
        						echo "<a href='" . $dir . "/" . $file . "'>".  $file ."</a><br />" ;
        					}
        				}
        			}
        		}
    		closedir($dh);
        	}
        }
        recurseDir('.');
        ?>
    </div>

</body>
</html>
