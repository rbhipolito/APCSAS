<?php
require 'subclasses/job_post_sst.php';
$sst = new job_post_sst;
$sst->auto_test('delete');
$sst_script = $sst->script;