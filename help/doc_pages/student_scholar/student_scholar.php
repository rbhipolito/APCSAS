<?php
require 'path.php';
init_cobalt();
require 'subclasses/student_scholar_doc.php';
$obj_doc = new student_scholar_doc;
$obj_doc->auto_doc();