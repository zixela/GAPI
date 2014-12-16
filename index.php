<?php
require 'gapi.class.php';

$gaUsername = 'www.erma.ge@gmail.com';
$gaPassword = 'hotelerma';
$profileId = '94690586';
$dimensions = array('pagePath','country', 'region', 'city');
$metrics = array('uniquePageviews','visits','Pageviews');
$sort = '-visits';
$fromDate = date('Y-m-d', strtotime('-2 days'));
$toDate = date('Y-m-d');

$ga = new gapi($gaUsername, $gaPassword);
$mostPopular = $ga->requestReportData($profileId, $dimensions, $metrics, $sort, null, $fromDate, $toDate, 1, 10);
echo '<pre>';
print_r($mostPopular);
echo '</pre>';
?>

