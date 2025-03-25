<?php

    // Get the submitted form data
    $teacher = $_POST['Teacher'];
    $subject = $_POST['subject'];
    $start_date = $_POST['start-date'];
    $end_date = $_POST['end-date'];
    $performance = $_POST['Performance'];

    // Generate the report using the collected data
    $report = "Report for: $teacher\nSubject: $subject\nDuration: $start_date to $end_date\nPerformance:\n$performance";

    // Send the report to the user or save it as afile
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="report.txt"');
    echo $report;
?>