<?php
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="MWALIMU BORA LESSON PLAN.doc"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize('MWALIMU BORA LESSON PLAN.doc'));
	readfile('MWALIMU BORA LESSON PLAN.doc');
	exit;
?>