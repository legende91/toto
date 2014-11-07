<?php
// URI:       design:node/oosubitemscontextmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oosubitemscontextmenu.tpl
// Timestamp: 1339160640 (Fri Jun 8 15:04:00 CEST 2012)
$oldSetArray_af03ad26e4795bdd3276e3140a49906f = isset( $setArray ) ? $setArray : array();
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

$text .= '<script type="text/javascript">
menuArray[\'OpenOffice\'] = [];
menuArray[\'OpenOffice\'][\'depth\'] = 1;
menuArray[\'OpenOffice\'][\'elements\'] = [];
</script>

<hr />
<a id="child-menu-openoffice" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'OpenOffice\', \'child-menu-openoffice\' ); return false;">OpenOffice.org</a>

';

$setArray = $oldSetArray_af03ad26e4795bdd3276e3140a49906f;
$tpl->Level--;
?>
