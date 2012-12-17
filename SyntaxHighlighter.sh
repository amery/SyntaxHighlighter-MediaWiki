R=/extensions/syntax-highlighter-code-colorizer

render_css() {
	local f="$EXTDIR/styles/sh$1.css"
	cat <<EOT
	\$out->addScript('<link rel="stylesheet" type="text/css" href="'.\$wgScriptPath.'$f"></link>');
EOT
}

render_js() {
	local f="$EXTDIR/scripts/sh$1.js"
	cat <<EOT
	\$out->addScript('<script type="text/javascript" src="'.\$wgScriptPath.'$f"></script>');
EOT
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

$(render_js Core)
$(for x in $BRUSH; do render_js Brush$x; done)

	\$out->addScript('<script type="text/javascript">SyntaxHighlighter.all();</script>');
	return true;
}
?>
EOT
