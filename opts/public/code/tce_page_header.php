<?php
//============================================================+
// File name   : tce_page_header.php
// Begin       : 2001-09-18
// Last Update : 2010-09-20
//
// Description : Outputs default XHTML page header.
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//
// License:
//    Copyright (C) 2004-2010  Nicola Asuni - Tecnick.com LTD
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * @file
 * Outputs default XHTML page header.
 * @package com.tecnick.tcexam.public
 * @author Nicola Asuni
 * @since 2001-09-18
 */

/**
 */

require_once('tce_xhtml_header.php');
require_once '../../shared/code/tce_functions_errmsg.php';

// display header (image logo + timer)
/*F_print_error('ERROR', $_SERVER['HTTP_USER_AGENT']);  //debug browser UA
$ua = $_SERVER['HTTP_USER_AGENT'];
if (strpos($ua, 'MSIE') or strpos($ua, 'Trident') or strpos($ua, 'Chrom')) {
F_print_error('ERROR', <<<ERRMSG
<span>本系统使用MathML语言显示公式，经过检测，您的浏览器不支持MathML。</span><br />
<span>请下载安装<a target="_blank" href="http://www.dessci.com/en/products/mathplayer/download.htm">mathplayer插件</a>或者安装更先进的<a target="_blank" href="https://www.mozilla.org/zh-CN/firefox/new/">firefox浏览器</a>。</span>
ERRMSG
);
}
 */
echo '<div class="header">'.K_NEWLINE;
echo '<div class="left"><img src="/opts/images/logo_main.png" height="60px" /></div>'.K_NEWLINE;
echo '<div class="right">'.K_NEWLINE;
echo '<a name="timersection" id="timersection"></a>'.K_NEWLINE;
include('../../shared/code/tce_page_timer.php');
echo '</div>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;

// display menu
echo '<div id="scrollayer" class="scrollmenu">'.K_NEWLINE;
// CSS changes for old browsers
echo '<!--[if lte IE 8]>'.K_NEWLINE;
echo '<style type="text/css">'.K_NEWLINE;
echo 'ul.menu li {text-align:left;behavior:url("../../shared/jscripts/IEmen.htc");}'.K_NEWLINE;
echo 'ul.menu ul {background-color:#003399;margin:0;padding:0;display:none;position:absolute;top:20px;left:0px;}'.K_NEWLINE;
echo 'ul.menu ul li {width:200px;text-align:left;margin:0;}'.K_NEWLINE;
echo 'ul.menu ul ul {display:none;position:absolute;top:0px;left:190px;}'.K_NEWLINE;
echo '</style>'.K_NEWLINE;
echo '<![endif]-->'.K_NEWLINE;
require_once(dirname(__FILE__).'/tce_page_menu.php');
echo ' <div style="color: white;font-size:12pt; text-align:right;">';
echo rawurldecode($_SESSION['session_user_lastname']);
echo rawurldecode($_SESSION['session_user_firstname']);
echo '同学,欢迎你!</div>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;

echo '<div class="body">'.K_NEWLINE;

echo '<a name="topofdoc" id="topofdoc"></a>'.K_NEWLINE;
// useless for opts
//echo '<h1>'.htmlspecialchars($thispage_title, ENT_NOQUOTES, $l['a_meta_charset']).'</h1>'.K_NEWLINE;

//============================================================+
// END OF FILE
//============================================================+
