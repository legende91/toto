<?php
// URI:       design:node/ezmucontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmucontextmenu.tpl
// Timestamp: 1336572256 (Wed May 9 16:04:16 CEST 2012)
$oldSetArray_6972906544f3a22d47491becb6ea2a3d = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/plain_site/cache/template/compiled/common.php' );

$text .= '
<hr/>
<script type="text/javascript">
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'][\'url\'] = "/index.php/ezmultiupload/upload/%nodeID%";
</script>

<a id="menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Envoyer plusieurs fichiers</a>';

$setArray = $oldSetArray_6972906544f3a22d47491becb6ea2a3d;
$tpl->Level--;
?>
