#!/bin/sh

EXTDIR=/extensions/SyntaxHighlighter

render_css() {
	local f= x=
	for x; do
		f="$EXTDIR/styles/sh$x.css"
	cat <<EOT
	\$out->addScript('<link rel="stylesheet" type="text/css" href="'.\$wgScriptPath.'$f"></link>');
EOT
	done
}

render_js() {
	local f= x=
	for x; do
		f="$EXTDIR/scripts/$x.js"
	cat <<EOT
	\$out->addScript('<script type="text/javascript" src="'.\$wgScriptPath.'$f"></script>');
EOT
	done
}

CSS=ThemeDefault
BRUSH="Bash Diff Xml Java Cpp Plain Php Python"

cat <<EOT
<?php

if (!defined('MEDIAWIKI')) {
	die();
}

global \$wgHooks;
\$wgHooks['BeforePageDisplay'][] = 'setupHeadersForHighlight';

function setupHeadersForHighlight(\$out)
{
	global \$wgScriptPath;

$(for x in Core $CSS; do render_css $x; done)

$(render_js shCore)
$(for x in $BRUSH; do render_js shBrush$x; done)

	\$out->addScript('<script type="text/javascript">SyntaxHighlighter.all();</script>');
	return true;
}
?>
EOT
