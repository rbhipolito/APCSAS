<?php
require 'subclasses/student_scholar_sst.php';
$sst = new student_scholar_sst;
$sst->auto_test();
$sst_script = $sst->script;