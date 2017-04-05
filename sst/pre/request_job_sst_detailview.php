<?php
require 'subclasses/request_job_sst.php';
$sst = new request_job_sst;
$sst->auto_test('detail_view');
$sst_script = $sst->script;