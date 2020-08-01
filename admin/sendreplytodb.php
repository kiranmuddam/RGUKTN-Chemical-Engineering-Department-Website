<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.
require_once("../db.php");
header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

if ($input['action'] === 'edit') {
    mysqli_query($con,"UPDATE feedbacks SET reply='" . $input['reply'] . "' WHERE sno='" . $input['sno'] . "'");
} else if ($input['action'] === 'delete') {
    mysqli_query($con,"UPDATE feedbacks SET visibility=0 WHERE nid='" . $input['nid'] . "'");
} else if ($input['action'] === 'restore') {
    mysqli_query($con,"UPDATE feedbacks SET visibility=1 WHERE nid='" . $input['nid'] . "'");
}
echo json_encode($input);
