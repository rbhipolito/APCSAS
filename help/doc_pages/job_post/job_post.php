<?php
require 'path.php';
init_cobalt();
require 'subclasses/job_post_doc.php';
$obj_doc = new job_post_doc;
$obj_doc->auto_doc();