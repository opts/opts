<?php
//============================================================+
// File name   : tce_page_userbar.php
// Begin       : 2004-04-24
// Last Update : 2012-12-30
//
// Description : Display user's bar containing copyright
//               information, user status and language
//               selector.
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
//    Copyright (C) 2004-2013 Nicola Asuni - Tecnick.com LTD
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * @file
 * Display user's bar containing copyright information, user status and language selector.
 * @package com.tecnick.tcexam.shared
 * @author Nicola Asuni
 * @since 2004-04-24
 */

// IMPORTANT: DO NOT REMOVE OR ALTER THIS PAGE!

/* skip links
echo '<div class="minibutton" dir="ltr">'.K_NEWLINE;
echo '<a href="#timersection" accesskey="3" title="[3] '.$l['w_jump_timer'].'" class="white">'.$l['w_jump_timer'].'</a> <span style="color:white;">|</span>'.K_NEWLINE;
echo '<a href="#menusection" accesskey="4" title="[4] '.$l['w_jump_menu'].'" class="white">'.$l['w_jump_menu'].'</a>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;
 */

if ($_SESSION['session_user_level'] > 0) {
  echo '<div class="userbar"> 上海电力学院 '.K_NEWLINE;
	// display user information
	echo '<span title="'.$l['h_user_info'].'">'.$l['w_user'].': '.$_SESSION['session_user_name'].'</span>';
	// display logout link
	echo ' <a href="tce_logout.php" class="logoutbutton" title="'.$l['h_logout_link'].'">'.$l['w_logout'].'</a>'.K_NEWLINE;
  echo '</div>'.K_NEWLINE;
}

// language selector
if (K_LANGUAGE_SELECTOR AND (stristr($_SERVER['SCRIPT_NAME'], 'tce_test_execute.php') === FALSE)) {
	echo '<div class="minibutton" dir="ltr">'.K_NEWLINE;
	echo '<span class="langselector" title="change language">'.K_NEWLINE;
	$lang_array = unserialize(K_AVAILABLE_LANGUAGES);
	$lngstr = '';
	while (list($lang_code, $lang_name) = each($lang_array)) {
		$lngstr .= ' | ';
		if ($lang_code == K_USER_LANG) {
			$lngstr .= '<span class="selected" title="'.$lang_name.'">'.strtoupper($lang_code).'</span>';
		} else {
			// query string was removed because unnecessary
			//if (isset($_SERVER['QUERY_STRING']) AND (strlen($_SERVER['QUERY_STRING'])>0)) {
			//	$querystr = preg_replace("/([\?|\&]?)lang=([a-z]{2,3})/si", '', $_SERVER['QUERY_STRING']);
			//}
			//if (isset($querystr) AND (strlen($querystr)>0)) {
			//	$langlink = $_SERVER['SCRIPT_NAME'].'?'.str_replace('&', '&amp;', $querystr).'&amp;lang='.$lang_code;
			//} else {
				$langlink = $_SERVER['SCRIPT_NAME'].'?lang='.$lang_code;
			//}
			$lngstr .= '<a href="'.$langlink.'" class="langselector" title="'.$lang_name.'">'.strtoupper($lang_code).'</a>';
		}
	}
	echo substr($lngstr, 3);
	echo '</span>'.K_NEWLINE;
	echo '</div>'.K_NEWLINE;
}
?>
<div class="minibutton" dir="ltr">
<span class="copyright"><a href="http://www.tcexam.org">TCExam</a> All Nonsense Feature Copyright &copy; 2004-2014 Nicola Asuni </span>
</div>

<div class="minibutton">
	<a href="http://www.miitbeian.gov.cn/">沪ICP备14012944号-1</a>
</div>
