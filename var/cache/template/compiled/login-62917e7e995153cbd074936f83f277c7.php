<?php
// URI:       design:user/login.tpl
// Filename:  design/admin/templates/user/login.tpl
// Timestamp: 1342179294 (Fri Jul 13 13:34:54 CEST 2012)
$oldSetArray_51e618a16ef5bb762ecb102af8b4e494 = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond );
$if_cond = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'warning', $vars[$namespace] ) ) ? $vars[$namespace]['warning'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'bad_login' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="message-warning">
<h2><span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ']</span> The system could not log you in.</h2>
<ul>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'user_is_not_allowed_to_login', $vars[$namespace] ) ) ? $vars[$namespace]['user_is_not_allowed_to_login'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'user_is_not_allowed_to_login', $vars[$namespace] ) ) ? $vars[$namespace]['user_is_not_allowed_to_login'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( true ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '         <li>';
unset( $var );
unset( $var2 );
unset( $var3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $var3 );
$var3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'login', $vars[$namespace] ) ) ? $vars[$namespace]['login'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%user_login' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( '"%user_login" is not allowed to log in because failed login attempts by this user exceeded allowable number of failed login attempts!', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</li>
         <li>Please contact the site administrator.</li>
    ';
}
else
{
$text .= '         <li>Make sure that the username and password is correct.</li>
         <li>All letters must be entered in the correct case.</li>
         <li>Please try again or contact the site administrator.</li>
    ';
}
unset( $if_cond );
// if ends

$text .= '</ul>
</div>';
}
else
{
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site_access'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'allowed' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="message-warning">
<h2><span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ']</span> Access denied!</h2>
<ul>
    <li>';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site_access'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%siteaccess_name' => $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'You do not have permission to access <%siteaccess_name>.', $var4 );
unset( $var3, $var4, $var5, $var6 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</li>
    <li>Please contact the site administrator.</li>
</ul>
</div>';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '

<div class="context-block">

<form name="loginform" method="post" action="/index.php/user/login">

<div class="box-header"><div class="box-tc"><div class="box-ml"><div class="box-mr"><div class="box-tl"><div class="box-tr">

<h1 class="context-title">Log in to the Administration Interface of eZ Publish</h1>

<div class="header-mainline"></div>

</div></div></div></div></div></div>

<div class="box-ml"><div class="box-mr"><div class="box-content">

<div class="context-attributes">

<div class="block">
    <p>Please enter a valid username/password combination then click "Log in".</p>
    <p>Use the "Register" button to create a new account.</p>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'max_num_of_failed_login', $vars[$namespace] ) ) ? $vars[$namespace]['max_num_of_failed_login'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'max_num_of_failed_login', $vars[$namespace] ) ) ? $vars[$namespace]['max_num_of_failed_login'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( false ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var2 );
unset( $var3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $var3 );
$var3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'max_num_of_failed_login', $vars[$namespace] ) ) ? $vars[$namespace]['max_num_of_failed_login'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%max_number_failed' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'The user will not be allowed to login after <b>%max_number_failed</b> failed login attempts.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    ';
}
unset( $if_cond );
// if ends

$text .= '</div>

<div class="block">
    <label for="id1">Username:</label>
    <input class="halfbox" type="text" size="10" name="Login" id="id1" value="';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'login', $vars[$namespace] ) ) ? $vars[$namespace]['login'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" tabindex="1" title="Enter a valid username in this field." />
</div>

<div class="block">
    <label for="id2">Password:</label>
    <input class="halfbox" type="password" size="10" name="Password" id="id2" value="" tabindex="1" title="Enter a valid password in this field." />
</div>
';
// if begins
$if_cond = false;
if ( $if_cond )
{
$text .= '    <div class="block">
        <input type="checkbox" tabindex="1" name="Cookie" id="id3" /><label for="id3" style="display:inline;">Remember me</label>
    </div>';
}
unset( $if_cond );
// if ends

$text .= '
</div>

</div></div></div>

<div class="controlbar">
<div class="box-bc"><div class="box-ml"><div class="box-mr"><div class="box-tc"><div class="box-bl"><div class="box-br">
<div class="block">
    <input class="button" type="submit" name="LoginButton" value="Log in" tabindex="1" title="Click here to log in using the username/password combination entered in the fields above." />
    <input class="button" type="submit" name="RegisterButton" value="Register" tabindex="1" title="Click here to create a new account." />
</div>
</div></div></div></div></div></div>
</div>

<input type="hidden" name="RedirectURI" value="';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'redirect_uri', $vars[$namespace] ) ) ? $vars[$namespace]['redirect_uri'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />

</form>

</div>





<script type="text/javascript">
    window.onload=function()
    {
        document.getElementById(\'id1\').focus();
    }
</script>

';

$setArray = $oldSetArray_51e618a16ef5bb762ecb102af8b4e494;
$tpl->Level--;
?>
