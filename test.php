<?php
require_once('../../config.php');
require_once('lib.php');
require_once($CFG->libdir.'/completionlib.php');
require_once($CFG->libdir.'/db/services.php');
require_once("$CFG->dirroot/lib/completionlib.php");
require_once("$CFG->libdir/gradelib.php");
require_once($CFG->libdir . '/enrollib.php');
require_once($CFG->dirroot . '/lib/enrollib.php');

//Creating poblish table.
$publish = new \html_table();
$usertable->id = "usertable";
$usertable->head = array(get_string('serial','local_deptrpts'),
						get_string('serial','local_deptrpts'),
						get_string('serial','local_deptrpts'),
						get_string('serial','local_deptrpts'),
						get_string('serial','local_deptrpts'));
