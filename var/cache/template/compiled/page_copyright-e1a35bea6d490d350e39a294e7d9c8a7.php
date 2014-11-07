<?php
// URI:       design/admin/templates/page_copyright.tpl
// Filename:  design/admin/templates/page_copyright.tpl
// Timestamp: 1342179298 (Fri Jul 13 13:34:58 CEST 2012)
$oldSetArray_8c626ca5233ef0a6362bd57ecf8827a6 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/cache/template/compiled/common.php' );

$text .= '
<a href="http://ez.no/ezpublish">eZ Publish</a> Copyright &copy; 1999-2012 <a href="http://ez.no/">eZ Systems AS</a> and others. For more information see <a href="/index.php/ezinfo/about">ezinfo/about</a>.

';

$setArray = $oldSetArray_8c626ca5233ef0a6362bd57ecf8827a6;
$tpl->Level--;
?>
