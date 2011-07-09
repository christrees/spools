<?php
header("content-type: application/json");
// Create a generic object.
// Assign it the properties of id (optional - id of target HTML element, from URL)
// and 'message' - the feedback message we want the user to see.
if (isset($_GET['gpuid'])) $rtnjsonobj->symbol = $_GET['gpuid'];
$rtnjsonobj = array(
    grid => 55,
    user => "CAT",
    message => null,
    players =>  array(1234 => "GSH", 0007 => "CAT"),
    token => array(
  1 => "GSH",  2 => "CAT",  3 => null,  4 => null,  5 => null,
  6 => "GSH",  7 => "CAT",  8 => null,  9 => null, 10 => null,
 11 => "GSH", 12 => "CAT", 13 => null, 14 => null, 15 => null,
 16 => "GSH", 17 => "CAT", 18 => null, 19 => null, 20 => null,
 21 => "GSH", 22 => null, 23 => null, 24 => null, 25 => null )
);
// Wrap and write a JSON-formatted object with a function call, using the supplied value of parm 'callback' in the URL:
echo $_GET['callback']. '('. json_encode($rtnjsonobj) . ')';
?>
