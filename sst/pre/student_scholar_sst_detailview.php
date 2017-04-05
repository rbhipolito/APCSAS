<?php
require 'subclasses/student_scholar_sst.php';
$sst = new student_scholar_sst;
$sst->auto_test('detail_view');
$sst_script = $sst->script;