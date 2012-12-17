<?php

if (!defined('MEDIAWIKI')) {
	die();
}

global $wgHooks;
$wgHooks['BeforePageDisplay'][] = 'setupHeadersForHighlight';

function setupHeadersForHighlight($out)
{
	global $wgScriptPath;

	$out->addScript('<link rel="stylesheet" type="text/css" href="'.$wgScriptPath.'/styles/shCore.css"></link>');
	$out->addScript('<link rel="stylesheet" type="text/css" href="'.$wgScriptPath.'/styles/shThemeDefault.css"></link>');

	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/scripts/shCore.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/scripts/shBrushBash.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/scripts/shBrushDiff.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/scripts/shBrushXml.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/scripts/shBrushJava.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/scripts/shBrushCpp.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/scripts/shBrushPlain.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/scripts/shBrushPhp.js"></script>');
	$out->addScript('<script type="text/javascript" src="'.$wgScriptPath.'/scripts/shBrushPython.js"></script>');

	$out->addScript('<script type="text/javascript">SyntaxHighlighter.all();</script>');
	return true;
}
?>
