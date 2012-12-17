<?php

if (!defined('MEDIAWIKI')) {
	die();
}

global $wgHooks;
$wgHooks['BeforePageDisplay'][] = 'setupHeadersForHighlight';

function setupHeadersForHighlight($out)
{
	global $wgScriptPath;

	$out->addScript('<link rel="stylesheet" type="text/css" href="'.$wgScriptPath.'/extensions/SyntaxHighlighter/styles/shCore.css"></link>');
	$out->addScript('<link rel="stylesheet" type="text/css" href="'.$wgScriptPath.'/extensions/SyntaxHighlighter/styles/shThemeDefault.css"></link>');

	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/extensions/SyntaxHighlighter/scripts/shCore.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/extensions/SyntaxHighlighter/scripts/shBrushBash.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/extensions/SyntaxHighlighter/scripts/shBrushDiff.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/extensions/SyntaxHighlighter/scripts/shBrushXml.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/extensions/SyntaxHighlighter/scripts/shBrushJava.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/extensions/SyntaxHighlighter/scripts/shBrushCpp.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/extensions/SyntaxHighlighter/scripts/shBrushPlain.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/extensions/SyntaxHighlighter/scripts/shBrushPhp.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/extensions/SyntaxHighlighter/scripts/shBrushPython.js"></script>');

	$out->addScript('<script type="text/javascript">SyntaxHighlighter.all();</script>');
	return true;
}
?>
