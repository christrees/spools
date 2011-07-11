<?php
header("content-type: application/json");
// Create a generic object.
// Assign it the properties of id (optional - id of target HTML element, from URL)
// and 'message' - the feedback message we want the user to see.
if (isset($_GET['gpuid'])) $rtnjsonobj->symbol = $_GET['gpuid'];
$rtnjsonobj = array(
               message => "Hello World",
               array( Title => "rose",
                      Price => 1.25,
                      Number => 15
                    ),
               array( Title => "daisy",
                      Price => 0.75,
                      Number => 25,
                    ),
               array( Title => "orchid",
                      Price => 1.15,
                      Number => 7
                    )
             );
// Wrap and write a JSON-formatted object with a function call, using the supplied value of parm 'callback' in the URL:
echo $_GET['jsoncallback']. '('. json_encode($rtnjsonobj) . ')';
?>
