<?php
require_once('../config/tce_config.php');
echo '<html><body>';
//$pagelevel = 0;
require_once('../../shared/code/tce_authorization.php');

$thispage_title = '这是我的pdf';
//require_once('../code/tce_page_header.php');
require_once('../../shared/code/tce_functions_form.php');
require_once('../../shared/code/tce_functions_tcecode.php');
require_once('../../shared/code/tce_functions_test.php');
require_once('../../shared/code/tce_functions_test_stats.php');

/*
if (isset($_REQUEST['test_id']) AND ($_REQUEST['test_id'] > 0)) {
	$test_id = intval($_REQUEST['test_id']);
} else {
	header('Location: /opts/my404.html');
	exit;
}
*/

    require_once '../../shared/code/omjax.config.php';
    echo '<script type="text/javascript" src="/opts/mathjax/MathJax.js?config=MML_HTMLorMML.js&locale=zh-hans" ></script>';

$user_id = 180;

$test_id = 91;
$testuser_id=$test_id;
// get user's test stats
$userdata = F_getUserData($user_id);
$teststat = F_getTestStat($test_id, 0, $user_id, 0, 0, $testuser_id);
$teststat['testinfo'] = F_getUserTestStat($test_id, $user_id, $testuser_id);
$test_id = $teststat['testinfo']['test_id'];

if (!F_getBoolean($teststat['testinfo']['test_results_to_users'])) {
	header('Location: index.php'); //redirect browser to public main page
	exit;
}

//var_dump($teststat);
//var_dump($userdata);

//lock user's test
F_lockUserTest($test_id, $testuser_id);

echo '<div class="container">'.K_NEWLINE;

echo '<div class="tceformbox">'.K_NEWLINE;


//if (F_getBoolean($teststat['testinfo']['test_report_to_users'])) {
if (1) {
	echo '<div class="rowl">'.K_NEWLINE;
	echo F_printUserTestStat($testuser_id);
	echo '</div>'.K_NEWLINE;

}



echo '</body></html>';
//require_once('../code/tce_page_footer.php');
?>
